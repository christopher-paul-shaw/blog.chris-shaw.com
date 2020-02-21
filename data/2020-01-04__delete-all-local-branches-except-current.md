How to delete all local branches in a git repository except current

--PAGE--

When working on lots of branches, over time they build up and can slow down your workflow, a simple way to remove them is to run the following
from CLI.

If you want to only keep a specific branch other than master, just replace master with the branch you want to keep.

    git checkout master
    git branch | grep -v '^*' | xargs git branch -D
