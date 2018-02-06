## Storyteller Theme ![Statamic 2.0](https://img.shields.io/badge/statamic-2.8-blue.svg?style=flat-square)

This site theme is designed to highlight the new [Bard Fieldtype](https://docs.statamic.com/fieldtypes/bard) and it's magnificent capabilities. It includes a number of pre-built Bard sets for long form content.

- Hero Blocks with background images and color/mix overlays
- Photos
- Video Embeds
- Two Column Text

## Screenshot:

![Storyteller Preview](https://d.pr/i/VqnfH/aXEnVnAj5C+)

Or you can see it in action at [new.jackmcdade.com](https://new.jackmcdade.com).

## Installing

- Setup a fresh Statamic install
- Unzip the Storyteller package
- Replace the contents of `site` and `assets` with those from the package
- Create a super user to access the Control Panel

## Customizing

Storyteller is essentially drop-and-go for new sites. You can modify some design elements in the Globals area to make it your own. And if you want to really go at it, you can mess around in the templates. Everything uses [Tailwind](https://tailwindcss.com) so it's very easy to make changes.

```
cd site/themes/storyteller
yarn && yarn run dev
```
