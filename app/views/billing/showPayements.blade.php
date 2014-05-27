<div style="width:800px; margin:20px; font-size: 17px">
	<div class="pull-left" style="width:400px; ">
		<table class="table  table-bordered" style="boarder:" >
                            <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Service</th>
                                        <th>Amount</th>
                                        <th>select all &nbsp;<input type="checkbox"  onClick="toggle(this)" /></th> 
                               
                                    </tr>
                            </thead>
                            <tbody id="provide_medication">
                                    <?php $index=1; ?>
                                    @foreach($patients_payments as $patients_payment)
                                 <tr>
                                 	<td>{{$index}}</td>
                                    <td>{{Service::find($patients_payment->service_id)->name}}</td>
                                    <td>{{$patients_payment->amount}}</td>
                                    <td style="text-align:center"><input type="checkbox" id="pay_service_{{$patients_payment->id}}" value="{{$patients_payment->id}}" name="add[]"  class="checkbox" /></td>
                                 </tr>
                                    <?php $index++; ?>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            
	</div>

</div>