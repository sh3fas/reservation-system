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
                         width: 300px;
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

<?php echo form_open('reservation/create'); ?>
   <div class="create">
    <table>
        <tr>
            <td>
              <br>
               <div class="content">
                <label for="vardasID">Vardas*:</label>
                    <input id="vardasID" name="vardas" type="text" required placeholder="" value="">
                <br>
                <Br>
                <label for="pavardeID">Pavardė*:</label>
                    <input id="pavardeID" name="pavarde" type="text" required placeholder="" value="">
                <br>
                <Br>
                <label for="telefonas">Telefonas*:</label>
                    <input id="telefonasID" name="telefonas" type="text" required placeholder="" value="">
                <br>
                <Br>
                <label for="el.pastas">El. paštas:</label>
                    <input id="elpastasID" name="elpastas" type="email" required placeholder="" value="">
                <br >
                <Br>

                <input id="button" type="submit" name="submit" value="Pridėti" >
                </div>
            </td>
        </tr>
    </table>
    </div>
    <div class="footer">
                 Automobilių nuomos sistemos sukurta: Kristijanas Kiseliovas
    </div>
</form>
    