Quick fix for the bad signature , index file corrupt error in Git.
--PAGE--

While running GIT inside Bash on Ubuntu on Windows (Windows Subsystem For Linux), I ran git status and gt the following error. 

    cshaw@pc:~/Projects/MBM-CRM$ git status
    error: bad signature
    fatal: index file corrupt

At first I thought this would be a pain to fix, admitadly I could just reclone the repository, but I found this way to be quicker and cleaner.

Firstly, Remove the Offending Index

    rm -f .git/index

Then reset the current working version to match the repository

    git reset
    
This is a quick fix, if it does not work in your circumstance then I would advise just git cloning from fresh.
--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}
