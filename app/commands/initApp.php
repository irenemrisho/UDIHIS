<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class initApp extends Command {


	protected $user;

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'udihis:init';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'migrate all tables and insert admin ';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(User $user)
	{
		parent::__construct();
		$this->user = $user;

	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */



	public function fire()
	{

				$this->info('Setup for admin account: ');
			    $username = $this->ask('Enter username : ');
			    $password = $this->secret('Enter password: ');
			    $cpassword = $this->secret('Confirm password: ');
			    if($cpassword != $password){
			    	$this->error('passwords mismatch! ');
			    	$this->fire();
			    	$this->line();
			    }else{
			    	$this->info("{$username} has been created successfully! ");
			    	$this->call('migrate');
			    	$this->user->username    = $username;
			   		$this->user->password  = Hash::make($password);
			   		$this->user->save();
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
			//array('example', InputArgument::REQUIRED, 'An example argument.'),
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
