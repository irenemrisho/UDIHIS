<div style="width:800px; margin:20px; font-size: 17px">
	<div class="pull-left" style="width:400px; ">
		<table class="table  table-bordered" style="boarder:" >
            <thead>
                    <tr>

                        <th>#</th>
                        <th>Service</th>
                        <th>Amount</th>
               
                    </tr>
            </thead>
            <tbody id="provide_medication">
                    <?php $index=1; ?>
                    @foreach($patients_payments as $patients_payment)
                 <tr>
                 	<td>{{$index}}</td>
                    <td>{{Service::find($patients_payment->service_id)->name}}</td>
                    <td>{{Price_company::where('service_id',$patients_payment->service_id)->first()->price}}</td>
                    
                 </tr>
                    <?php $index++; ?>
                    @endforeach
                    
                </tbody>
            </table>
                            
	</div>

</div>