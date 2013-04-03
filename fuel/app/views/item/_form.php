<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Itemname', 'itemname'); ?>

			<div class="input">
				<?php echo Form::input('itemname', Input::post('itemname', isset($item) ? $item->itemname : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Itemdescription', 'itemdescription'); ?>

			<div class="input">
				<?php echo Form::input('itemdescription', Input::post('itemdescription', isset($item) ? $item->itemdescription : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Itemserial', 'itemserial'); ?>

			<div class="input">
				<?php echo Form::input('itemserial', Input::post('itemserial', isset($item) ? $item->itemserial : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>