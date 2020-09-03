# Simple Resume

## Information
This is a basic plugin that allows creation of Resume in the OctoberCMS.

## Features
Plugin adds backend menu that allows editing data in 5 categories:
- Education
- Experience
- General information
- Social networks
- Languages

Also, it adds new category in settings where you can set your name and optional
GDPR consent text.

Plugin supports [RainLab.Translate](https://octobercms.com/plugin/rainlab-translate) out of the box.

## Components
Plugin adds two components
- Resume
- PersonName

### Resume
This component allows you to display your resume.
Plugin includes basic resume layout to show possibilities but **WITHOUT ANY STYLING**.
Make sure you will style your resume in your theme.

Sample usage
```twig
[Resume]
==
{% component 'Resume' %}
```

### PersonName
This component creates access to name set in the settings page. It has no default layout as it is designed
only to access data.

Sample usage
```html
[PersonName]
==
<p>{{ PersonData.personName }}</p>
```
