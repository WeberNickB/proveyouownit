<script type="text/javascript">
function showDialog(){
   $("#divId").dialog("open");
   return false;
}

$(document).ready(function() {
   $("#divId").dialog({
           autoOpen: false,
           modal: true,
           height: 500,
           width: 500
       });
});
</script>

<?php if ($todos): ?> 
<table class="zebra-striped"> 
    <thead> 
        <tr> 
            <th>Title</th> 
            <th>Description</th> 
            <th></th> 
        </tr> 
    </thead> 
    <tbody> 
<?php //foreach ($items as $item): ?>        
<tr> 
            <td><?php // echo $item->title; ?></td> 
            <td><?php //echo $todo->description; ?></td> 
            <td> 
                <?php //echo Html::anchor('todo/view/'.$todo->id, 'View'); ?> | 
                <?php //echo Html::anchor('todo/edit/'.$todo->id, 'Edit'); ?> | 
                <?php //echo Html::anchor('todo/delete/'.$todo->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?> 
  
            </td> 
        </tr> 
<?php //endforeach; ?>  </tbody> 
</table> 
  
<?php //else: ?> 
<p>No Todos.</p> 
  
<?php //endif; ?> 
<?php //if(Auth::instance()->check()) { ?> 
<p class="button"><?php //echo Html::anchor('todo/create', 'Add new Todo', array('class' => 'btn success')); ?></p> 
<?php //} ?>
<?php if(isset($errors)){echo $errors;}?>

<hr>

<p class="button"><?php echo Html::anchor('users/updatePassword', 'Update password', array('class' => 'btn primary')); ?></p>





