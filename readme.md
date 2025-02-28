# Eternal Odyssey - WordPress Theme

![Eternal Odyssey Theme](assets/images/hero.jpg)

**Eternal Odyssey** is a modern, Full Site Editing (FSE) WordPress theme designed for versatility and visual appeal. Inspired by a cosmic journey, it combines sleek design with powerful customization options, making it perfect for blogs, portfolios, testimonials, and more.

## Features

- **Full Site Editing (FSE):** Fully compatible with WordPress 6.7+, allowing complete control over layout and design via the Site Editor.
- **Custom Post Types:** Includes \`portfolio\` and \`testimonial\` CPTs for showcasing projects and client feedback.
- **Responsive Design:** Optimized for all devices with adaptive layouts and styles.
- **Cosmic Aesthetic:** Features starry backgrounds, glowing hover effects, and a gradient-based color scheme.
- **SCSS Styling:** Modular Sass files for easy customization and maintenance.
- **Patterns:** Pre-built patterns like \`hero-section\`, \`portfolio-grid\`, and \`landing-callout\` for quick page building.
- **Parallax Effect:** Subtle parallax scrolling on the Hero Section (via JavaScript).

## Usage

### Adding Content
- **Pages:** Use the Site Editor to customize pages like Home, Portfolio, etc., with the \`single-page.html\` template.
- **Posts:** Blog posts use \`single-post.html\` and are listed on the homepage via \`index.html\`.
- **Portfolio:** Add items under **Portfolio > Add New**; view them with \`single-portfolio.html\`.
- **Testimonials:** Add under **Testimonials > Add New**; view with \`single-testimonial.html\`.

### Customization
- Edit SCSS files in \`assets/scss/\` for styling changes, then recompile with \`sass\`.
- Modify templates in \`templates/\` and patterns in \`patterns/\` via the Site Editor or code.

### Demo Data
- Import \`demo-data.xml\` (if provided) via **Tools > Import > WordPress** to populate sample content.

## Requirements

- WordPress 6.7 or higher
- PHP 7.2 or higher
- Sass (for compiling SCSS)

## Directory Structure

eternal-odyssey/
├── assets/
│   ├── css/                  # Compiled CSS for editor
│   ├── images/               # Theme images (add hero.jpg here)
│   ├── js/                   # JavaScript files
│   └── scss/                 # SCSS source files
├── patterns/                 # Block patterns
├── templates/                # FSE templates
├── parts/                    # Template parts (header, footer)
├── functions.php             # Theme setup and CPT registration
├── style.css                 # Main stylesheet (compiled)
├── theme.json                # Theme configuration
└── readme.md                 # This file

## Contributing

Feel free to fork this repository, submit pull requests, or open issues for bugs and feature requests.

## License

Eternal Odyssey is licensed under the [GNU General Public License v2](http://www.gnu.org/licenses/gpl-2.0.html).

## Credits

Created by [Anatolii S.](https://anatoliis.github.io/). Built with ❤️ for the WordPress community.
