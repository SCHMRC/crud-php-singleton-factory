<?php include __DIR__ . '/home.php';?>
<div class="container" style="justify-content: center;">


<form action="public/index.php" method="POST">
        <h4>Inserimento Persona</h4>
    <div>
    <table style="border: 1px solid gray; padding: 20px;background-color: whitesmoke;">
        <tr>
            <td><input type="text" name="name" id="" placeholder="nome:" required <?php if(isset($persona)):?> value = "<?=$persona->getNome(); ?>" <?php endif; ?>></td>
            <td><input type="text" name="surname" id="" placeholder="cognome" required <?php if(isset($persona)):?> value = "<?=$persona->getCognome(); ?>" <?php endif; ?>></td>
        </tr>
        <tr>
            <td><input type="date" name="nato" id="" required <?php if(isset($persona)):?> value = "<?=$persona->getNato(); ?>" <?php endif; ?>></td>
            <td><select name="idAzienda" id="" required>
                <option disabled selected>Seleziona azienda</option>
                <?php if(isset($aziende)):
                    foreach($aziende as $item):?>
                    <option value="<?=$item['idAzienda']?>"><?=$item['nome']?></option>
                <?php endforeach; endif;?>
            </td>
        </tr>

        <tr>
            <td><?php if(isset($persona) && $persona->getId() !== ''):?><input hidden type="text" name="personaId" value="<?php echo $persona->getId();?>"><?php endif;?></td>
            <td align="end"><input type="submit" style="background-color:blue; width:60px; color: white" <?php if(isset($persona)):?> name="updatePersona"  value = "Aggiorna"<?php else: ?> name="insertPersona"  value = "Inserisci" <?php endif; ?>></td>
        </tr>
    </table>
    </div>
</form>
</div>
<div class="container mt" style="justify-content: center;">
<form action="public/index.php" method="POST">
<table style="border: 1px solid gray; padding: 20px;background-color: whitesmoke;">
    <thead>
        <th>nome</th>
        <th>cognome</th>
        <th>nato</th>
        <th>azioni</th>
    </thead>
    <tbody>
        <?php if(isset($persone)):?>
        <?php foreach($persone as $item):?>
            <tr>
                <td><?=$item->getNome()?></td>
                <td><?=$item->getCognome()?></td>
                <td><?=$item->getNato()?></td>
                <td>
                    <div class="container" style="padding: 0;">
                    <span><form action="public/index.php" method="POST"><button type="submit" name="update">Update</button><input hidden type="text" name="id" value="<?=$item->getId()?>"></form></span>
                    <span><form action="public/index.php" method="POST"><button type="submit" name="delete">delete</button><input hidden type="text" name="id" value="<?=$item->getId()?>"></form></span>
                    </div>

                </td>

            </tr>
        <?php endforeach; endif; ?>
    </tbody>
</table>

</form>
</div>

