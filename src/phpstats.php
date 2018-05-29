<?php
/**
* Class contains following statistics Functions
* Sum
* Mean
* Mode
* Median
* Sample Standard Deviation
* Population Standard Deviation
* Sample Variance
* Population Variance
* Standard Error
* Factorial
* Permutations
* Combinations
* Z Score to P Value

**/
class PhpStats{
  /**
  * Method to find sum for the given input numbers
  **/
  public function sum($inpArr){
    if($this->isValidDataArray($inpArr)){
      $sum = 0;
      for($i=0; $i<count($inpArr); $i++){
        $sum+=$inpArr[$i];
      }
      return $sum;
    }
  }
  /**
  * Method to find population and sample mean for the given input array
  **/
  public function mean($inpArr){
    if($this->isValidDataArray($inpArr)){
      return ($this->sum($inpArr)/count($inpArr));
    }else{
      return null;
    }
  }
  /**
  * Method to find mode for the given input numbers in array
  **/
  public function mode($inpArr){
    if($this->isValidDataArray($inpArr)){
      $mode = '';
      $countArr = array(); // mode
      for($i=0; $i<count($inpArr); $i++){
        if(!isset($countArr[$inpArr[$i]])){
          $countArr[$inpArr[$i]] = 1;
        }else{
          $countArr[$inpArr[$i]]++;
        }
      }
      $maxs = array_keys($countArr, max($countArr));
      for($i=0; $i<count($maxs); $i++){
        $times = $countArr[$maxs[$i]];
        if($times > 1){
          if($mode != ''){
            $mode.=', ';
          }
          $mode.= $maxs[$i] ;
        }else{
          $mode = '';
        }
      }
      return $mode;
    }else{
      return false;
    }
  }
  /**
  * Method to find median for the given input numbers in array
  **/
  public function median($inpArr){
    if($this->isValidDataArray($inpArr)){
      sort($inpArr);
      $middle = count($inpArr)/2;//median
      if(count($inpArr) % 2 == 1){
        $median = $inpArr[$middle];
      }else{
        $median = ($inpArr[$middle - 1] + $inpArr[$middle])/2;
      }
      return $median;
    }else{
      return null;
    }
  }
  /**
  * Method to find factorial for the given number
  **/
  public function factorial($n){
    $factorial = 1;
    if($n == 0 || $n == 1){
      $factorial = 1;
    }else if($n > 1){
      for($i = 1 ; $i <= $n ; $i++){
        $factorial = $factorial * $i;
      }
    }else{
      return null;
    }
    return $factorial;
  }
  /**
  * Method to find permutation (nPr) for the n and r
  **/
  public function permutation($n, $r){
    if($r>0 && $n > $r){
      return ($this->factorial($n) / $this->factorial($n - $r));
    }else{
      return null;
    }
  }
  /**
  * Method to find permutation (nCr) for the n and r
  **/
  public function combinations($n, $r){
    if($r>0 && $n > $r){
      $npr = $this->permutation($n, $r);
      return ($npr / $this->factorial($r));
    }else{
      return null;
    }
  }
  /**
  * Method to find sample standard deviation (s)
  **/
  public function sampleStandardDeviation($inpArr){
    $variance = $this->variance($inpArr);
    if($variance != null){
      return sqrt($variance);
    }else{
      return false;
    }
  }
  /**
  * Method to find population standard deviation (σ)
  **/
  public function populationStandardDeviation($inpArr){
    $variance = $this->variance($inpArr, false);
    if($variance != null){
      return sqrt($variance);
    }else{
      return false;
    }
  }
  /**
  * Method to find sample variance (s^2)
  **/
  public function sampleVariance($inpArr){
    return $this->variance($inpArr);
  }
  /**
  * Method to find population variance (σ^2)
  **/
  public function populationVariance($inpArr){
    return $this->variance($inpArr, false);
  }
  /**
  * Method to find standard error
  **/
  public function standardError($inpArr){
    $sd = $this->sampleStandardDeviation($inpArr);
    if($sd != null){
      return ($sd/sqrt(count($inpArr)));
    }else{
      return $sd;
    }
  }
  /**
  * This method is used to calculate Z Score to P Value (two tailed), where the Z score is ranged from -3.5 to 3.5
  **/
  public function zScore($z){
    if($z < -3.5){
      return 0;
    }else if($z > 3.5){
      return 1;
    }
    $factK = 1;
    $sum = 0;
    $term = 1;
    $k = 0;
    $loopStop = exp(-23);
    while(abs($term) > $loopStop){
      $term = 0.3989422804 * pow(-1,$k) * pow($z,$k) / (2 * $k + 1) / pow(2,$k) * pow($z,$k+1)/$factK;
      $sum += $term;
      $k++;
      $factK *= $k;
    }
    $sum += 0.5;
    return $sum;
  }
  private function variance($inpArr, $isSample=true){
    if($this->isValidDataArray($inpArr)){
      $count = count($inpArr);
      $mean = $this->mean($inpArr);
      $x2Mean = 0;
      foreach ($inpArr as $inp) {
        $x2Mean+= pow(($inp - $mean),2);
      }
      return (($isSample)?$x2Mean/($count - 1):$x2Mean/$count);
    }else{
      return false;
    }
  }

  private function isValidDataArray($inpArr){
    if($inpArr != null && count($inpArr)>0){
      return true;
    }else{
      return false;
    }
  }
}
?>
