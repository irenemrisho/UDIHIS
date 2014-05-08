<div style="width:800px; margin:20px; font-size: 17px">
	<div class="pull-left" style="width:400px; ">
		<table class="table  table-bordered" style="boarder:" >
                            <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Medicine</th>
                                        <th>Dose</th>
                                        <th>select all &nbsp;<input type="checkbox"  onClick="toggle(this)" /></th> 
                               
                                    </tr>
                            </thead>
                            <tbody id="provide_medication">
                                    <?php $index=1; ?>
                                    @foreach($provided_meds as $provided_med)
                                 <tr>
                                 	<td>{{$index}}</td>
                                    <td>{{Medicine::find($provided_med->medicine_id)->name}}</td>
                                    <td>{{$provided_med->quantity}}</td>
                                    <td style="text-align:center"><input type="checkbox" id="rec_medic_{{$provided_med->id}}" value="{{$provided_med->id}}" name="add[]"  class="checkbox" /></td>
                                 	
                                </tr>
                                    <?php $index++; ?>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            
	</div>

</div>