<?php

//Bad Example
class SavingAccount  
{  
    public function CalculateInterest($accountType)  
    {  
        if($accountType=="Regular")  
        {  
            //Calculate interest for regular saving account 
        }  
        else if($accountType=="Salary")  
        {  
            //Calculate interest for saving account 
        }  
    }  
}


// Good Example
interface ISavingAccount  
{  
   public function CalculateInterest();  
}  

class RegularSavingAccount implements ISavingAccount  
{  
  public function CalculateInterest()  
  {  
    //Calculate interest for regular saving account
  }  
}  

  

class SalarySavingAccount implements ISavingAccount  
{  
  public function CalculateInterest()  
  {  
    //Calculate interest for saving account 
  }  
}


?>
