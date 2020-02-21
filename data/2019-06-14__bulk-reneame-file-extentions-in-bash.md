Using Bash to bulk rename file extentions
--PAGE--
## Change Extention
The following will rename all files with the exention .old to .new
  
    for f in *.old; do mv $f `basename $f .old`.new; done;

## Append
The following will append the extention .new to all iles
    
    for f in *; do mv $f `basename $f `.new; done;

## Remove
The following will remove the extention .removeme from all files

    for f in *.removeme; do mv $f `basename $f .removeme`; done;
    
--DATA--{"category":"snippet"}
