# phpstatistics
PHP Statistics Library contains following statistical functions
## Sum
The sum of all observations of sample from population or the sum of all elements of population

## Mean (μ)
The average of all observations of sample or population which tells the common behaviour of the group.

## Mode
The most repeated value of the obervations in a sample or population

## Median
The central element of the group after arranging the observations in either ascending or descending order. For even numbers the median is the average of two middle numbers.

## Sample Standard Deviation (s)
[Standard Deviation](https://getcalc.com/statistics-standard-deviation-calculator.htm) is an inferencial statistics function to estimate how the common characteristics of data deviates from mean or the common behavior of the sample data.

## Population Standard Deviation (σ)
It is an descrptive statistics function to find how the common characteristics of data deviates from the the mean or common behavior of the population data.

## Sample Variance (s²)
An inferential statistics function describes the variablitiy among the sample data. It tells how uniformly the data in the sample set distributed across.
## Population Variance (σ²)
An inferential statistics function describes the variablitiy among the population data. It tells how uniformly the data in the population distributed across.
## Standard Error of Mean and Proportion (SE)
[Standard Error](https://getcalc.com/statistics-standard-error-calculator.htm) is an popular inferential statistics function used to estimate how effective the selected sample size influence the results of statistical experiments. 
## Factorial (n!)
A popular mathematical function used in the context of probability & statistics to find the possible outcomes for a sample space.
## Permutations (nPr)
A probability function which describes how many permutations (nPr) are possible in a sample space where the the order is very important (for example XY & YX are not same and are considered two different events)
## Combinations (nCr or n Choose k)
A probability function which describes how many [combinations (nCr or n Choose k)](https://getcalc.com/statistics-combination-calculator.htm) are possible in a sample space where the the order is not important (for example XY & YX are same events and are considered as a single event)
## Z-score to P-value
[Z-score](https://getcalc.com/statistics-z-score-calculator.htm) is the measure of deviation of dataset in a sample or population which describes how many standard deviation the complete set of sample or population data deviates from its mean.
P-value is the measure of probability which estimates the data distribution in the expected region of bell curve.


## How to use
Place the phpstats.php file in your project folder, import the class and create object for the class to use it.
```
require('phpstats.php');
$stats = new PhpStats();
$arr = array(10,20,10,30,40,50,60,70);
$mode = $stats->mode($arr);
```
## Open-Source License
phpstatistics is subject to the terms of the  MIT LICENSE.
