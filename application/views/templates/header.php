<html>
       <style>
                   .header {
                      width:100%;
                      position:absolute;
                      top:0;
                      left:0;
                      font-family: verdana;
                      font-size: 16px;
                    }         
           
                   body {
                        margin: 0;
                        padding: 0;
                    }
           
                   .header table {
                       margin: auto auto;
                    }

                   nav {
                        padding: 5px 0 20px 0;
                        width: 912px;
                        margin:0 auto;
                        list-style:none;
                   }
           
                   ul {
                       margin: 0;
                       padding-left: 15px;
                   }
                   
                   
                   li {
                        display: inline;
                        float: left;
                        background-color: #3b8dcc;
                        margin: 3px;
                        border-radius: 5px;
                     }

                    a {
                        display: block;
                        padding: 8px;
                        text-align:center;
                        width:180px; /* fixed width */
                        text-decoration:none; 
                        color: white;
                        font-family: verdana;
                        font-size: 14px;
                    }
                   
                </style>
       
        <head>
               <div class="header">
                <title>Rezervavimo sistem by K.K.</title>
                <center><p>Automobilių nuoma</p></center>
                <table>
                    <Tr>
                     <td>
                         <nav>
                            <ul>
                                <li><a href="<?php $_SERVER['REQUEST_URI'] ?>/reservation-system-master/index.php/ordered">Rezervuoti automobiliai</a></li>
                                <li><a href="<?php $_SERVER['REQUEST_URI'] ?>/reservation-system-master/index.php/bookcar_controller/create_booking">Rezervuoti</a></li>
                                <li><a href="<?php $_SERVER['REQUEST_URI'] ?>/reservation-system-master/index.php/reservation/create">Pridėti vartotoją</a></li>
                            </ul>
                        </nav>
                    </td>
                </Tr>
                </table>
                </div>
                <br>
                <br>
                <br>
        </head>