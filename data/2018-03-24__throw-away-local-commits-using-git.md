Sometimes you make commits locally in error and sometimes they can be a pain to get rid of, here are a few ways to do so.

--PAGE--

There are many ways to do this task, this article like most of the git related ones on this blog are notes for reference. This was created when I got stuck with a commit which would not go away.


# 1) Git Reset
One way is to just reset the local repository to match the version in the remote repository. I tend to go for this one but occasonally forget the syntax.

    git reset --hard origin/<branch>

example

    git reset --hard origin/master


# 2) Git Reset Commit
Similar to the above, we can set the commit we actually want to revert back to.

    git reset --hard <commit hash>

# 3) Delete Branch
One of the easiest though and often overlooked it so just delete the branch and checkout a fresh verson.

    git branch -D mybranch
    git checkout -b origin/mybranch

Now there are other methods out there, the above are just my preferred.

--DATA--
{"category": "tutorial", "author": "Christopher Shaw"}
