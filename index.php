<?php
echo anchor('player/add','add player',array('class'=>'btn btn-danger'));

?>

<div class="row-fluid sortable">		

<div class="box-content">
<table class="table table-striped table-bordered bootstrap-datatable ">
<thead>
<tr>
<th>player number</th>
<th> name</th>
<th> gender</th>


<th>Actions</th>


</tr>
</thead>   
<tbody>

<?php
foreach($players as $p){



echo'<tr><td class="center">"'.$p['playerno'].'"</td>';
echo'<td>"'.$p['name'].'"</td>';


echo'<td class="center">"'.$p['sex'].'"</td>';


echo'<td class="center">
<a class="btn btn-success" href="'.base_url().'index.php/player/detail/'.$p['playerno'].'">
<i class="icon-zoom-in icon-white"></i>  
View                                            
</a>
<a class="btn btn-info" href="'.base_url().'index.php/player/edit/'.$p['playerno'].'">
<i class="icon-edit icon-white"></i>  
Edit                                            
</a>';




	echo'<a class="btn btn-danger" href="'.base_url().'index.php/player/delete/'.$p['playerno'].'">
<i class="icon-trash icon-white"></i> 
Delete
</a>';





echo'</td></tr>';







}


?>






</tbody>
</table>            
</div>
</div><!--/span-->

</div><!--/row-->
