<br><br><br>
            <style>
                    html,body {
                      margin:0;
                       padding:0;
                       height:100%;
                    }
                 
                    .create table {
                       width: 915px;
                       border-top: 1px solid black;
                       border-right: 1px solid black;
                       border-left: 1px solid black;
                       border-bottom: 1px solid black;
                       margin: auto auto;
                    }
    
                    .content {
                       min-height: 520px;
                       width: 522px;
                       font-family: verdana;
                    }
    
                    .content label {
                        padding-left: 20px;
                        padding-right: 20px;
                    }
                    
                    .content input {
                        float: right;
                        -moz-border-radius:5px; /* Firefox */
                        -webkit-border-radius: 5px; /* Safari, Chrome */
                        -khtml-border-radius: 5px; /* KHTML */
                        border-radius: 5px;
                        width: 320px;
                    }
                
                    .content select {
                        -moz-border-radius:5px; /* Firefox */
                        -webkit-border-radius: 5px; /* Safari, Chrome */
                        -khtml-border-radius: 5px; /* KHTML */
                        border-radius: 5px;
                        height: 25px;
                        width: 320px;
                        }
                
                    #selektas {
                        float: right;
                    }
                
                    #button {
                        border: none;
                        color: white;
                        font-family: verdana;
                        font-size: 14px;
                        background-color: #3b8dcc;
                        -moz-border-radius:5px; /* Firefox */
                        -webkit-border-radius: 5px; /* Safari, Chrome */
                        -khtml-border-radius: 5px; /* KHTML */
                        border-radius: 5px;
                        width: 100px;
                        height: 33px;
                    }
                    
                    .footer {
                          margin: auto auto;
                          right: 0;
                          bottom: 0;
                          left: 0;
                          padding: 1rem;
                          background-color: silver;
                          text-align: center;
                          height: 15px;
                          width: 883px;
                          font-family: verdana;
                    }
            </style>

<?php echo validation_errors(); ?>

<?php echo form_open('bookcar_controller/create_booking'); ?>
   <div class="create">
    <table>
        <tr>
            <td>
              <br>
                <div class="content">
                        <label>Automobilis*:</label>
                          <select name="marke" required id="selektas">
                           <?php echo form_open('bookcar/bookcar'); ?>
                                        <?php
                                            foreach ($get_auto as $a):
                                        echo "<option value=\"".$a['aid']."\">".$a['aid'].". ".$a['marke']." ".$a['modelis']." ".$a['metai']." ".$a['tipas']." ".$a['kuras']." ";
                                        echo "<br>";
                                        ?>
                            <?php endforeach; ?> 
                            </select> 
                        <Br>
                        <Br>
                         <label>Vartotojas*:</label>   
                          <select name="vardas" required id="selektas">     
                           <?php echo form_open('bookcar/bookcar'); ?>
                                        <?php
                                            foreach ($get_user as $a):
                                        echo "<option value=\"".$a['vid']."\">".$a['vid'].". ".$a['vardas']." ".$a['pavarde']." ".$a['telefonas']." ".$a['epastas']." ";
                                        echo "<br>";
                                        ?>
                            <?php endforeach; ?>   
                         </select>       
                        <br>
                        <br>
                        <label for="nuo">Periodas nuo:
                            <input id="nuo" name="nuo" type="datetime-local" required placeholder="2017-12-05 14:00:00" value="" id="selektas">
                        </label>
                        <br>
                        <br>
                        <label for="iki">Periodas iki:
                            <input id="iki" name="iki" type="datetime-local" required placeholder="2017-12-30 21:00:00" value="" id="selektas"/>
                        </label>
                        <br>
                        <br />

                    <input id="button" type="submit" name="submit" value="Rezervuoti" />
                </div>
            </td>
        </tr>
    </table>
    </div>
    <div class="footer">
                 Automobilių nuomos sistemos sukurta: Kristijanas Kiseliovas
    </div>
</form>