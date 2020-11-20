

<?php echo form_open('',"class='col-12 form ' need-validation");

   echo '<div class="form-group"><br>';
      echo form_label('type d\'offre :', 'offre');
      echo form_input('offre', set_value('offre',$detail->an_offre) ,'class="form-control col-12" id="offre" required');
      echo form_error('offre');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('type de bien :', 'type');
      echo form_input('type', set_value('type', $detail->an_type) ,'class="form-control col-12" id="type" required');
      echo form_error('type');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('nombre de piéces :', 'pieces');
      echo form_textarea('pieces',set_value('', $detail->an_pieces),'class="form-control col-12" id="pieces"');
      echo form_error('pieces');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('référence du bien :', 'ref');
      echo form_textarea('ref',set_value('ref', $detail->an_ref),'class="form-control col-12" id="ref"');
      echo form_error('ref');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('Description', 'Description');
      echo form_textarea('Description',set_value('Description', $detail->an_description),'class="form-control col-12" id="Description"');
      echo form_error('Description');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('', '');
      echo form_textarea('',set_value('', $detail->),'class="form-control col-12" id=""');
      echo form_error('');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('', '');
      echo form_textarea('',set_value('', $detail->),'class="form-control col-12" id=""');
      echo form_error('');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('', '');
      echo form_textarea('',set_value('', $detail->),'class="form-control col-12" id=""');
      echo form_error('');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('Prix', 'Prix');
      echo form_input('Prix', set_value('Prix',$detail->an_prix) ,'class="form-control col-12" id="Prix" required');
      echo form_error('Prix');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('surface', 'surface');
      echo form_input('surface', set_value('surface',$detail->an_surf_tot) ,'class="form-control col-12" id="surface" required');
      echo form_error('surface');
   echo '</div>';


   echo '<div class="form-group"><br>';
      echo form_label('diagnostic', 'diagnostic');
      echo form_input('diagnostic', set_value('diagnostic',$detail->an_diagnostic) ,'class="form-control col-12" id="diagnostic" required');
      echo form_error('diagnostic');
   echo '</div>';


?>
</form>
