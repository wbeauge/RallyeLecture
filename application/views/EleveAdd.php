<?php echo validation_errors(); ?>
<?php echo form_open('Eleve/Add'); ?>
<div> Classe : <?php $comboBoxClasse->Render(); ?> </div>
<div>Nom : <input type="text" name="nom" value="<?php echo $this->input->post('nom'); ?>" /></div>
<div>Prenom : <input type="text" name="prenom" value="<?php echo $this->input->post('prenom'); ?>" /></div>
<div>Email : <input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" /></div>
<div>Password : <input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" /></div>
<button type="submit">Sauvegarder</button>
<?php echo form_close(); ?>