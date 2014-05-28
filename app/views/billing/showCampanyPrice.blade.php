 <?php 
        $Price_companies = Price_company::where('service_id',$service_id)->get(); 
        


        ?>
 <form  action="edit_service?edit={{$service_id}}" method="">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">{{Service::find($service_id)->name}} Price</h3>
        </div>
        <div class="modal-body">

        <div id="camp_price">
        <div style="width:800px; margin:20px; font-size: 17px">
            <div class="pull-left" style="width:400px; ">

        <table class="table  table-bordered" style="boarder:" >
                            <thead>
                                    <tr>

                                        <th>#</th>
                                        <th>Campany name</th>
                                        <th>Amount</th>
                                        
                               </tr>
                            </thead>
                             
                            <tbody >
                                    <?php $index=1; ?>
                                    @foreach($Price_companies as $Price_company)
                                 <tr>
                                    <td>{{$index}}</td>
                                    <td>
                                    <?php if($Price_company->company_id == 0){ ?>
                                    {{"Cash"}}
                                    <?php }else{?>
                                    {{InsuranceCompany::where('id',$Price_company->company_id)->first()->name}}
                                    <?php }?>
                                    </td>
                                    <td>{{$Price_company->price}}</td>
                                
                                 </tr>
                                    <?php $index++; ?>
                                    @endforeach
                                    
                                </tbody>
                            </table>
       
    </div>

</div>
</div>                                                                              

</div>
<div class="modal-footer" id="">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<a href="edit_service?edit={{$service_id}}" class="btn btn-primary">Update price</a>
</div>
</form>


