#!/bin/bash

if [ $# -ne 1 ]; then
    echo $0: usage: release.sh version
    exit 1
fi

version=$1

pwd
echo "Starting release $version"
git flow release start $version

echo "Updating VERSION"
echo $version > VERSION
git add VERSION
git commit -m "$version release"

echo "Finishing release $version"
git flow release finish -p -m "v.$(version)" $version
git flow release publish $version
