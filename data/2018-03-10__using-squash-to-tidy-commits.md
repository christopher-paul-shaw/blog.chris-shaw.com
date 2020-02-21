How to tidy up a branch with multiple nonsence commits into one commit

--PAGE--

I fequenty use different machines through the week rather than lug a laptop round with me. To keep my code uptodate I commit to and update the branch I am working on every time I am done writing a section, even if its not complete.

The convenience of this is that the code is always consistent, just pick up the next machine and pull the latest version. The negative for this is that branches look very messy in the log.

To clean this, we can **squash** commits into one when merging into master, like so:

    git checkout master
    git merge --squash branch-with-all-commits-in

The above merges in the code changes but does not make a commit or move to the head. From here we can commit all the changes as one commit.

    git add *
    git commit -m "Merged in Work For Issue X"

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}
