# dash-website

Project Dash is a place where the community itself can collaborate on tools for community awareness and collaboration in support of our ultimate objective of committer quality and cooperation. This is very much a research project as we are not entirely sure what these tools will be.

The Eclipse Foundation provides our global community of individuals and organizations with a mature, scalable, and business-friendly environment for open source software collaboration and innovation.

[![Build Status](https://travis-ci.org/eclipse/dash-website.svg?branch=main)](https://travis-ci.org/eclipse/dash-website)

## Getting started

Install dependencies, build assets and start a web server:

```bash
git clone --recurse-submodules https://github.com/eclipse/dash-website.git
cd dash-website
hugo server
```

### Update hugo-solstice-theme

The [hugo-solstice-theme](https://github.com/EclipseFdn/hugo-solstice-theme) was added to this project as a git submodules.

```bash
git submodule update --remote
```

For more information, please see git documentation on [submodules](https://git-scm.com/book/en/v2/Git-Tools-Submodules).

## How to build my project's website with Jenkins?

The preferred static website generator for Eclipse project websites is [Hugo](https://gohugo.io/). 

You should first put your Hugo sources in a dedicated Git repository, either at GitHub if your source code is already hosted at GitHub or at git.eclipse.org. If you don't have such a repository already, feel free to [open a request](https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Community&component=Git), the Eclipse IT team will create one for you.

Note that each and every Eclipse project automatically gets a Git repository with `git.eclipse.org/www.eclipse.org/<project_name>` (see this [repository index](https://git.eclipse.org/r/plugins/gitiles/www.eclipse.org/) for complete list). This is not where you want to push your Hugo sources. This repository contains the webpages that are automatically and regularly pulled and published on the www.eclipse.org HTTP server. All the content from the master branch will eventually be available at the URL https://www.eclipse.org/<project_name>.

We recommend that our projects start with forking our [hugo-eclipsefdn-website-boilerplate](https://github.com/EclipseFdn/hugo-eclipsefdn-website-boilerplate) project.

Once your Hugo sources are in the proper repository, update the file named `Jenkinsfile` at the root of the repository with the proper value for `PROJECT_NAME` and `PROJECT_BOT_NAME` environment variable. We also expect projects to update the README.md, config.toml and all the files in the content folder.

If you don't have a Jenkins instance already, [ask for one](https://wiki.eclipse.org/CBI#Requesting_a_JIPP_instance). If you need assistance with the process, [open a ticket](https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Community&component=CI-Jenkins).

Tge `Jenkinsfile` example assumes that your project will use 'main' as the default branch for your source code. Projects will need to make changes to the file to use a different branch name.

## Contributing

1. [Fork](https://help.github.com/articles/fork-a-repo/) the [eclipse/dash-website](https://github.com/eclipse/dash-website) repository
2. Clone repository: `git clone --recurse-submodules https://github.com/[your_github_username]/dash-website.git`
3. Create your feature branch: `git checkout -b my-new-feature`
4. Commit your changes: `git commit -m 'Add some feature' -s`
5. Push feature branch: `git push origin my-new-feature`
6. Submit a pull request

### Declared Project Licenses

This program and the accompanying materials are made available under the terms
of the Eclipse Public License v. 2.0 which is available at
http://www.eclipse.org/legal/epl-2.0.

SPDX-License-Identifier: EPL-2.0

## Related projects

### [EclipseFdn/solstice-assets](https://github.com/EclipseFdn/solstice-assets)

Images, less and JavaScript files for the Eclipse Foundation look and feel.

### [EclipseFdn/hugo-solstice-theme](https://github.com/EclipseFdn/hugo-solstice-theme)

Hugo theme of the Eclipse Foundation look and feel. 

## Bugs and feature requests

Have a bug or a feature request? Please search for existing and closed issues. If your problem or idea is not addressed yet, [please open a new issue](https://github.com/eclipse/dash-website/issues/new).

## Author

**Christopher Guindon (Eclipse Foundation)**

- <https://twitter.com/chrisguindon>
- <https://github.com/chrisguindon>

## Trademarks

* Eclipse® is a Trademark of the Eclipse Foundation, Inc.
* Eclipse Foundation is a Trademark of the Eclipse Foundation, Inc.

## Copyright and license

Copyright 2021 the [Eclipse Foundation, Inc.](https://www.eclipse.org) and the [dash-website authors](https://github.com/eclipse/dash-website/graphs/contributors). Code released under the [Eclipse Public License Version 2.0 (EPL-2.0)](https://github.com/eclipse/dash-website/blob/src/LICENSE).