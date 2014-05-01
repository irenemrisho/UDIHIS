<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class userApp extends Command {


	private $users;

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'udihis:user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Users of UDIHIS System Log';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($users)
	{
		parent::__construct();
		$this->users = $users;
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{

		$this->info('Type: 1.) All users, 2.) User Info, 3.) Create User');
		$choose  = $this->ask('Enter choose : ');
		if($choose == 1){
			$this->info('---------------------------------------------------------------------');
			$this->info('|Username ');
			$this->info('---------------------------------------------------------------------');
			$i = 1;
			foreach ($this->users as $user) {
				$username   = $user->email;
				$level      = $user->level;
				$Created_at	= $user->created_at; 
			    $this->info("|{$i}:| {$username} ");
			    $i++;
			}
			$this->info('---------------------------------------------------------------------');
		}else if($choose == 2){
			$username = $this->ask('Enter username : ');
			$count     = User::where('email', $username)->count();
			if($count == 0){
				$this->info("Username: {$username} does not exist!");
			}else{
				$user = User::where('email', $username)->first();
				$level    = $user->level;
				$d        = User::level($level);
				$this->info("{$username} | Level: {$level} | Designation: {$d}");
			}
			
		}else if($choose == 3){
			$this->info('Setup for new user account: ');
			    $username = $this->ask('Enter username : ');
			    $level = $this->ask('Enter level : ');
			    $password = $this->secret('Enter password: ');
			    $cpassword = $this->secret('Confirm password: ');
			    if($cpassword != $password){
			    	$this->error('passwords mismatch! ');
			    	$this->fire();
			    	$this->line();
			    }else{
			    	$user = new User();
			    	$user->email     = $username;
			    	$user->level     = $level;
			   		$user->password  = Hash::make($password);
			   		$user->save();
			    }
		}else{
			$this->info('---------------------------------------------------------------------');
			$this->info("Oooops! something went wrong!! please choose again");
			$this->info('---------------------------------------------------------------------');
			$this->fire();
		}
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('all', InputArgument::OPTIONAL, 'An all argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
