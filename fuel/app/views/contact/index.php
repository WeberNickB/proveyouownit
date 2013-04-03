<div class="row">
   <label for="name">Name:</label>
   <div class="input"><?php echo Form::input('name'); ?></div>
</div> 
<div class="row">
   <label for="email">Email:</label>
   <div class="input"><?php echo Form::input('email'); ?></div>
</div>
 
<div class="row">
   <label for="message">Comment:</label>
   <div class="input"><?php echo Form::textarea('message'); ?></div>
</div>
 
<div class="row">
   <div class="input"><?php echo Form::submit('submit'); ?></div>
</div>
 