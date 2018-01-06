<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class='wrapper'>
    
    <div>
    <h1>Separation Anxiety Symptom Tracker</h1>
</div>
    <form action="process.php" method="post">
        <div><input type="hidden" name="reporter" value="child"/></div>
        <div class='cell'>NHS ID: <input type="number" name="nhsId" id="nhsId" size="15"></div>
           
        <div class='cell' id="clientName">Relationship to child: <input type='text'name='clientName' size='50%'></div>
        <div></div> 
        <div class='cell' id='date'>Date: <input type='date' name='date'> &nbsp;&nbsp;Time: <input type='time' name='time'></div>
                <div class='cell'>
            Grade: 
            <select name="grade">
                <option value="">Please select</option>
                <?php for($i=3; $i <= 12; $i++){
                    echo '<option value="'.$i.'">Grade '.$i.'</option>';
                }
?>
                
            </select>
        </div>
        <div class="cell">
            Gender:
            <select name="gender">
                <option value="">Please select</option>
                <option value="M">Boy</option>
                <option value="F">Girl</option>
            </select>
        </div>
        
        <hr/>
        
        <div>Please put a circle around the word that shows how often each of these things happens to you.
There are no right or wrong answers.</div>
        <hr/>
        <div class='table'>
        
        
 <?php
 $question =  array(1=>5, 9, 17, 18, 33, 45, 46);
 foreach($question as $key => $value){
 
 ?>
        <div class='row' id='<?=$key?>'>
            
            <div class='cell'><?=$key?></div>
            <div class='cell'><?=constant(QUESTION_.$value);?></div>
            <div class='cell'>Never:<input type="radio" name='question_<?=$value?>' value='0'></div>
            <div class='cell'>Sometimes:<input type="radio" name='question_<?=$value?>' value='1'></div>
            <div class='cell'>Often:<input type="radio" name='question_<?=$value?>' value='2'></div>
            <div class='cell'>Always:<input type="radio" name='question_<?=$value?>' value='3'></div>
          

        </div>
        
        
      <?php
      
 }
      ?>
        
        

</div>

        <div><input type='submit' name='Submit' value="Submit"></div>
            </form>
</div>