<h1 align="center">WPConstructor Previous Next Post Block</h1>

<p align="center"><img src="https://wpconstructor.com/assets/images/logos/wpconstructor-previous-next-blog.png" alt="Logo of WPConstructor Previous Next Post Block" width="400"></p>

A lightweight WordPress block that adds previous and next post navigation with featured images and post titles.

## Description

WPConstructor Previous Next Post Block adds a customizable previous and next post navigation section to your WordPress posts.

The block displays the previous and next posts with:
- Featured images
- Clickable post links
- Post titles
- Responsive layout
- Smooth hover effects

It is designed to work with WordPress block themes and classic themes using the block editor.

## Screenshot

![WPConstructor Previous Next Post Block Screenshot](https://wpconstructor.com/assets/images/readme/screenshots/previous-next-post-block-screenshot.jpg)

## Features

- ✅ Previous and next post navigation
- ✅ Featured image support
- ✅ Clickable images and titles
- ✅ Responsive design
- ✅ Lightweight and dependency-free
- ✅ Server-side rendering
- ✅ Custom styling support
- ✅ Works with WordPress custom post types

## Requirements

- WordPress 6.0 or higher
- PHP 7.6 or higher

## Installation

### Manual Installation

1. Download the plugin: Get the [newest release](https://github.com/WPConstructor/previous-next-post-block/releases/).
2. Upload the plugin folder to:

```
/wp-content/plugins/
```

3. Activate the plugin through the WordPress admin dashboard.
4. Add the **WPConstructor Previous Next Post** block to your post content.

## Usage

After activating the plugin:

1. Open the WordPress block editor.
2. Search for:

```
Previous Next Post
```

3. Insert the block e.g. at the end of your post content.

The block will automatically display:
- The previous post
- The next post
- Their featured images
- Their titles

## Custom Post Types

The block supports custom post types as long as they use WordPress's standard post navigation functions and have published previous/next posts available.

## Styling

The plugin includes default styling:

- Rounded featured images
- Hover scaling effect
- Responsive mobile layout

You can override the CSS classes in your theme:

```css
/* Container for previous/next images */
.wpcn-post-navigation-images {
}

/* Individual navigation link wrapper */
.wpcn-post-nav-image {
}

/* Hover effect for navigation links */
.wpcn-post-nav-image:hover {
}

/* Feature image styling */
.wpcn-feature-image {
}

/* Navigation link title */
.wpcn-post-nav-title {
}
```

## Development

Clone the repository:

```bash
git clone https://github.com/wpconstructor/wpconstructor-previous-next-post-block.git
```

## File Structure

```
wpconstructor-previous-next-post-block/
│
├── wpconstructor-previous-next-post-block.php
├── LICENSE
├── README.md
└── assets/
    └── css/
        └── style.css
    └── js/
        └── editor.js
```

## Changelog

- v0.1.0 9th July 2026
  - First working MVP Release.
- v0.1.1 2nd September 2026
  - Improved assets/styles.css

## License

GPL-3.0-or-later

See:

https://www.gnu.org/licenses/gpl-3.0.html

## Author

WPConstructor

Website:

https://wpconstructor.com

## Support

For support, feature requests, or bug reports, please visit:

https://wpconstructor.com/support/