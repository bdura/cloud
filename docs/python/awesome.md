# Awesome Python

A curated list of delightful Data Science libraries and resources. For more awesomeness, check out [awesome](https://github.com/sindresorhus/awesome).

[![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)

## Reading list

### [Hitchiker's Guide to Python](https://docs.python-guide.org/writing/structure/)

A great resource for Python best practices :

- idiomatic/_pythonic_ expressions
- code structuring
- common libraries

## IDE

[VS Code](https://code.visualstudio.com/) is a great tool.

A few extensions that will help you code faster than ever:

- [Pylance](https://marketplace.visualstudio.com/items?itemName=ms-python.vscode-pylance) and [Python](https://marketplace.visualstudio.com/items?itemName=ms-python.python): a language server for Python
- [Jupyter](https://marketplace.visualstudio.com/items?itemName=ms-toolsai.jupyter): Jupyter support within VS Code
- [Gitlens](https://marketplace.visualstudio.com/items?itemName=eamodio.gitlens): Git supercharged
- [Auto docstrings](https://marketplace.visualstudio.com/items?itemName=njpwerner.autodocstring): automatically generate docstrings.
- [Coverage Gutters](https://marketplace.visualstudio.com/items?itemName=ryanluker.vscode-coverage-gutters): display test coverage
- [YAML](https://marketplace.visualstudio.com/items?itemName=redhat.vscode-yaml): YAML syntax highlighting
- [Better TOML](https://marketplace.visualstudio.com/items?itemName=bungcip.better-toml): TOML syntax highlighting
- [SQLTools](https://marketplace.visualstudio.com/items?itemName=mtxr.sqltools): explore an SQL database from VS Code
- [Thunder Client](https://marketplace.visualstudio.com/items?itemName=rangav.vscode-thunder-client): test REST API from VS Code
- [Todo Tree](https://marketplace.visualstudio.com/items?itemName=Gruntfuggly.todo-tree): highlight todos and checklists
- [Conventional commits](https://marketplace.visualstudio.com/items?itemName=vivaxy.vscode-conventional-commits): help you use conventional commits
- [Markdown all in one](https://marketplace.visualstudio.com/items?itemName=yzhang.markdown-all-in-one): supercharge your markdown editor
- [Markdown PDF](https://marketplace.visualstudio.com/items?itemName=yzane.markdown-pdf): save your markdowns to PDF
- [Marp for VS Code](https://marketplace.visualstudio.com/items?itemName=marp-team.marp-vscode): create stunning presentations in markdown

## Scripts

### [Typer](https://typer.tiangolo.com/features/)

Type-hint-powered CLI for Python. A must-have.

## Testing Python code

### [Pytest](https://docs.pytest.org/)

Pytest is a great library for testing Python code.
You really should test your code, and start doing so from day one...
You risk letting the workload overrun if you wait too long,
testing legacy code is a hassle.

With a well defined test-suite, you can refactor your code without having
to worry that everything works: you know it does once the tests pass.

### [Hypothesis](https://hypothesis.readthedocs.io/)

Hypothesis works with Pytest to automate unit-testing with random examples.

## Versioning

### [Conventional commits](https://www.conventionalcommits.org/)

Use conventional commits if you can, it make your git logs much more readable
and human (as well as machine) friendly.

### Semantic Versioning

Use semantic versioning for your libraries.

### [Poetry](https://python-poetry.org/)

Python dependency management and packaging made easy.

Poetry simplifies the dependency management, and makes sure every member of the team is working with the same environment, limiting _it works on my machine_ syndrome. You get a managed virtual environment for free, and packaging becomes easy as a breeze.

## Logging

### [Loguru](https://github.com/Delgan/loguru)

A most simple logging library. Removes some of the hassle of using the standard logging library, and goes above and beyond with support for :

- colored logging
- exception catching
- etc.

## Coding with style

### [Google's style guide](https://google.github.io/styleguide/pyguide.html)

Take a look at this great style guide, it goes over many patterns.

### [Black](https://github.com/psf/black)

Automatic formatting of your Python files that goes beyond PEP8 compliance. Your code will be neat and tidy, and uniform across your project regardless of the author. In a nutshell :

> Black reformats your files in place. It is not configurable.

Also worth checking out :

- An [**incredible** Jupyter extension for automatic Black formatting](https://github.com/dnanhkhoa/nb_black)

### [Pre-commit](https://pypi.org/project/pre-commit/)

Check and lint you code before committing, to make sure it remains pristine every time! See [EDS-NLP's configuration](https://github.com/aphp/edsnlp/blob/master/.pre-commit-config.yaml) for inspiration.

You'll need to install it:

```console
# Install with pip
pip install pre-commit

# Add the pre-commit hook
pre-commit install

# Run on every files
pre-commit run --all-files
```

### [A great intro to Python types](https://fastapi.tiangolo.com/python-types/)

Python types, explained.

## Documentation

### [MkDocs](https://squidfunk.github.io/mkdocs-material/)

Write beautiful and modern documentations. See EDS-NLP's [documentation](https://aphp.github.io/edsnlp/latest/) and [configuration](https://github.com/aphp/edsnlp/blob/master/mkdocs.yml) for inspiration.
