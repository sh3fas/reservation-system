<html>

     <style>   .var {
      border: 2px solid black;
      margin-left: 300px;
      margin-right: 300px;
      text-align: center;
      background-color: lightslategray;
    }</style>


<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<div class='var'>
       <h3>Prideti vartotoja</h3>
          <section>
            <label name="vardas"> *Vardas:
     <input  name="vardas" type="text"  required placeholder="Vardas"> </label> <br/>
            <label name="pavarde"> *Pavarde:
     <input  name="pavarde" type="text"  required placeholder="Pavarde"> </label> <br/>
            <label name="tel"> *Telefono Numeris:
     <input  name="telefonas" type="number"  required placeholder="+370"> </label> <br/>
            <label> *Jusu elektroninis pastas:
       <input name="epastas" type="email" placeholder="email@email.com"  required > </label> <br/>
          </section>
    <input type="submit" name="submit" value="Prideti"/>
</div>
</form>








         
    <!--<label >vardas<input type="input" name="vardas" /></label>
    <br />

   <label >pavarde<input type="input" name="pavarde" /></label>
    <br/>
   
   <label  >telefonas <input type="input" name="telefonas" /></label> 
    <br/>
    <label >epastas <input type="input" name="epastas" /></label>
  <br/>-->