"""Generate the code reference pages and navigation."""

from pathlib import Path

import mkdocs_gen_files

files = [
    "changelog.md",
    # "contributing.md",
]

dev = Path('development')

for f in files:
    path = Path(f)

    print(path)
    print(dev/f)

    with mkdocs_gen_files.open(dev / f, "w") as fd:
        fd.write(path.read_text())