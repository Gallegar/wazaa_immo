<?= form_open('Utilisateur/connect',"class='col-12 form'");?>
   <div class="modal-body">
      <div class="form-group">
          <label for="loin">login</label>
          <input type="text" name="login" class="form-control">
      </div>
      <div class="form-group">
          <label for="mdp">mot de passe</label>
          <input type="password" name="mdp" class="form-control">
      </div>
   </div>
   <div class="">
      <button type="reset" class="btn btn-secondary" data-dismiss="modal">Retour</button>
      <button type="submit" class="btn btn-primary">Envoyer</button>
   </div>
</form>