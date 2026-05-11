# Step 2 — Footer Template (h2h-footer)

**Where to build:** Elementor → Templates → Theme Builder → Add New → Footer

---

## Overview

A dark two-row footer:
- **Top row:** Brand column (logo + tagline + socials) + 3 link columns
- **Bottom row:** Copyright | "Not affiliated" notice | Legal links

---

## Container Structure

```
[Footer Template]
  └── Container: footer-root (bg #0A1628)
        ├── Container: footer-top (border-bottom)
        │     └── Container: footer-inner (max-width 1200px)
        │           ├── Container: footer-brand  [flex: 2]
        │           │     ├── Widget: Image (logo)
        │           │     ├── Widget: Text (tagline)
        │           │     └── Container: social-row
        │           │           └── 4x Widget: Button (social icons)
        │           ├── Container: footer-col-1  [flex: 1] — Platform links
        │           ├── Container: footer-col-2  [flex: 1] — Community links
        │           └── Container: footer-col-3  [flex: 1] — Company links
        └── Container: footer-bottom
              └── Container: footer-bottom-inner (max-width 1200px)
                    ├── Widget: Text (copyright)
                    ├── Widget: Text ("Not affiliated" notice)
                    └── Widget: Text or Nav (legal links)
```

---

## Step-by-Step Build

### 1. Create the Template

1. **Templates → Theme Builder → Add New → Footer**
2. Name: `H2H Footer`
3. Click **Create Template**

### 2. Root Container

- **Width:** 100%
- **Background Color:** `#0A1628`
- **Padding:** 0

### 3. Footer Top Container

Inside root, add a Container:
- **Padding:** 64px 0 48px
- **Border:** Bottom, 1px, `rgba(255,255,255,.07)`

Inside that, add the **Inner Container** (max-width wrapper):
- **Max-width:** 1200px
- **Width:** 100%
- **Margin:** 0 auto
- **Padding:** 0 24px
- **Layout:** Flex, Row, Align: Flex Start, Gap: 48px

### 4. Brand Column (flex: 2)

Inside the inner container, add a Container with **Flex Grow: 2**, **Max Width: 280px**:

**A. Logo image:**
- Widget: **Image** — upload H2H logo
- Width: 140px
- Link: `/`
- Alt: `H2H Dating`
- Margin-bottom: 16px

**B. Tagline text:**
- Widget: **Text Editor**
- Content: `Organic, AI-Free online dating built on honesty, human connection, and radical transparency. Free forever — because love shouldn't have a paywall.`
- Typography: Inter 400 13px, `rgba(255,255,255,.5)`, line-height 1.65
- Margin-bottom: 20px

**C. Social icons row:**
- Add Container: Flex, Row, Gap: 10px
- Add 4 **Button** widgets inside (one per social):

  | Platform  | Text/Icon | Aria-label        | Link  |
  |-----------|-----------|-------------------|-------|
  | Facebook  | f         | H2H on Facebook   | `#`   |
  | Instagram | IG        | H2H on Instagram  | `#`   |
  | Twitter/X | X         | H2H on X/Twitter  | `#`   |
  | TikTok    | TT        | H2H on TikTok     | `#`   |

  Each button style:
  - Width: 36px, Height: 36px, Padding: 0
  - Background: `rgba(255,255,255,.07)`
  - Border: 1px solid `rgba(255,255,255,.1)`
  - Border radius: 8px
  - Text color: `rgba(255,255,255,.6)`
  - Hover background: `#E8536A`, Hover border: `#E8536A`, Hover color: `#fff`

### 5. Footer Link Columns (3 columns, flex: 1 each)

For each column, add a Container (Flex, Column, Gap: 10px):

**Column 1 — Platform:**
- Heading: `Platform` → Poppins 600 13px `#fff` uppercase letter-spacing 0.08em, margin-bottom 16px
- Links: Join Free `/register/`, Sign In `/login/`, How It Works `#how-it-works`, Why H2H `#why-us`, Browse Members `/members/`

**Column 2 — Community:**
- Heading: `Community`
- Links: Dating Blog `/blog/`, Success Stories `/success-stories/`, Safety Tips `/safety-tips/`, Verification Info `/verification/`

**Column 3 — Company:**
- Heading: `Company`
- Links: About Us `/about/`, Contact `/contact/`, Privacy Policy `/privacy/`, Terms of Service `/terms/`

**All link styling:**
- Widget: **Text Editor** for heading, then individual **Button** widgets (text-only style) for links
- OR use a single **Text Editor** widget per column with HTML:
  ```html
  <h4 class="footer-col-heading">Platform</h4>
  <nav>
    <a href="/register/">Join Free</a>
    <a href="/login/">Sign In</a>
    ...
  </nav>
  ```
- Link typography: Inter 400 14px, `rgba(255,255,255,.5)`
- Link hover: `#FCD34D`

Add this CSS to the column widget's **Custom CSS:**
```css
selector a {
  display: block;
  margin-bottom: 10px;
  color: rgba(255,255,255,.5);
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  text-decoration: none;
  transition: color .25s ease;
}
selector a:hover { color: #FCD34D; }
selector h4 {
  font-family: 'Poppins', sans-serif;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .08em;
  color: #fff;
  margin-bottom: 16px;
}
```

### 6. Footer Bottom Container

Inside root (below footer-top), add a Container:
- **Padding:** 20px 24px

Inside, add the inner container (max-width 1200px, auto margin):
- **Layout:** Flex, Row, Justify: Space Between, Align: Center, Flex Wrap: Wrap, Gap: 12px

Add 3 **Text Editor** widgets:

**A. Copyright:**
```
© 2026 H2H Dating. All rights reserved.
```
- Inter 400 12px, `rgba(255,255,255,.35)`

**B. Not Affiliated notice:**
```
⚠️ Not affiliated with Match Group, Tinder, Hinge, or any commercial dating platform.
```
- Inter 400 12px, `rgba(255,158,11,.5)`

**C. Legal links:**
```html
<a href="/privacy/">Privacy</a> &nbsp;|&nbsp;
<a href="/terms/">Terms</a> &nbsp;|&nbsp;
<a href="/cookies/">Cookies</a>
```
- Via Custom CSS: `selector a { color: rgba(255,255,255,.35); font-size:12px; } selector a:hover { color: rgba(255,255,255,.65); }`

### 7. Responsive Adjustments

**Tablet (1024px):**
- Footer grid: 2 columns (brand + 3 cols wrap to 2x2)

**Mobile (767px):**
- Footer grid: 1 column, stacked
- Footer bottom: stacked, center-aligned
- Social row: center-aligned

### 8. Publish & Assign

1. **Publish**
2. Conditions: **Include → Entire Site**
3. **Save & Close**
