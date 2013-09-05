issue=  head=HEAD  base=master

while getopts i:h:b: opt; do
    case $opt in
    i)
        issue=$OPTARG
        ;;
    h)
        head=$OPTARG
        ;;
    b)
        base=$OPTARG
        ;;
    esac
done

origin=$(git config --get remote.origin.url)
githubSSH="git@github.com:"
githubSuffix=".git"

origin=${origin/$githubSSH}
origin=${origin/$githubSuffix}

echo $issue
echo $head
echo $base
echo "https://api.github.com/repos/$origin/pulls"

# curl -d "{'issue': $issue, 'head': $head, 'base': $base}" -i https://api.github.com/repos/:owner/:repo/pulls