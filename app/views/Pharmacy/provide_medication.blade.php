@extends('dashboard')
@section('main')
 <h1 class="page-title">
                        <i class="icon-stethoscope"></i>
                        Provide medication					
                    </h1>

                    <div class="action-nav-normal">
                        <div class="row">



                        </div> <!-- /stat-container -->

                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Prescription List</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <table class="table  table-bordered">
                                    <tr>
                                        <th>#</th>
                                        <th>date</th>
                                        <th>patient</th>
                                        <th>doctor</th>
                                        <th>medicine</th>
                                        <th>quantity</th>
                                          <th>options</th>  
                               
                                    </tr>
                                    <?php $index=1; ?>
				      @foreach($provided_medicines as $provided_medicine)
					<tr><td>{{$index}}</td>
					<td>{{--$provided_medicine->created_at--}}</td>
					<td>{{--Patient::find(Patients_visit::find($provided_medicine->pv_id)->patient_id)->first_name--}}</td>
					<td>{{--User::find(Patients_visit::find($provided_medicine->pv_id)->doctor_id)->first_name--}} </td>
					<td>{{--$provided_medicine->medicine_id--}} </td>
                                        <td>{{$provided_medicine->quantity}} </td>
                                                                                                                                
                                                                                                                                
					<td class="action-td">
                                            <a href="provide_medication?provide={{$provided_medicine->id}}"  ><span class=" btn btn-small btn btn-primary">
                                                    Provide
                                                    <span>
                                         </a>

                                    </td>
                            </tr>
                        <?php $index++; ?>
                            @endforeach
                                    
                                <tbody id="provide_medication">
                                    
                                </tbody>
                            </table>

                        </div> <!-- /widget-content -->


@stop

