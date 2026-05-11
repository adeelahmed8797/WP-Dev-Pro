# Step 1 — Header Template (h2h-header)

**Where to build:** Elementor → Templates → Theme Builder → Add New → Header

---

## Overview

A sticky, frosted-glass header with:
- Logo (mark + name + tagline)
- Horizontal nav (5 links)
- Sign In text link + Join Free CTA button
- Mobile hamburger menu (Elementor Pro Nav Menu widget handles this automatically)

---

## Container Structure

```
[Header Template]
  └── Container: header-root
        ├── [sticky settings applied here]
        └── Container: header-inner (max-width 1200px, flex row)
              ├── Widget: Image (logo)         [flex-shrink: 0]
              ├── Widget: Nav Menu             [flex-grow: 1, center justify]
              └── Container: header-actions   [flex row, gap 12px, flex-shrink: 0]
                    ├── Widget: Button (Sign In — text style)
                    └── Widget: Button (Join Free — filled)
```

---

## Step-by-Step Build

### 1. Create the Template

1. Go to **Templates → Theme Builder → Add New**
2. Choose type: **Header**
3. Name it: `H2H Header`
4. Click **Create Template**

### 2. Root Container Settings

Click the outermost container (full width):
- **Layout:** Flex, Direction: Row, Align Items: Center
- **Width:** Full Width (100%)
- **Background:** `rgba(255, 255, 255, 0.97)`
- **Backdrop Filter:** Blur 12px (via Custom CSS on this container — see below)
- **Border:** Bottom only, 1px, `#E2E8F0`
- **Box Shadow:** `0 2px 16px rgba(15,27,53,.06)`
- **Height:** 72px (min height)
- **Z-index:** 1000
- **Sticky:** Advanced → Motion Effects → Sticky → Top

**Custom CSS on root container:**
```css
backdrop-filter: blur(12px);
-webkit-backdrop-filter: blur(12px);
```

### 3. Inner Container (max-width limiter)

Inside root, add a **Container**:
- **Layout:** Flex, Direction: Row, Align Items: Center, Justify: Space Between
- **Width:** 1200px max-width, 100% width
- **Margin:** 0 auto
- **Padding:** 0 24px
- **Height:** 72px

### 4. Logo Widget

Add an **Image** widget as the first child of the inner container:
- Upload the H2H logo from `/wp-content/uploads/` (use the existing site logo)
- **Width:** 160px (or adjust to match the logo proportions)
- **Link:** `/`
- **Alt text:** `H2H Dating — Heart to Heart`

> **If no logo image is ready yet**, use a Text widget as a temporary placeholder:
> - Text: `H2H Dating`
> - Font: Poppins 800, 22px, `#1E3A6E`
> - Add `Heart to Heart` below in Poppins 500, 10px, `#E8536A`, letter-spacing 0.06em

### 5. Nav Menu Widget

Add a **Nav Menu** widget as the second child:
- **Menu:** Select the menu you create in WordPress Admin → Appearance → Menus
  - Create a menu named "H2H Main Nav" with items:
    - Home → `/`
    - Sign Up → `/register/`
    - Why Choose Us → `#why-us` (anchor to section 2)
    - How It Works → `#how-it-works` (anchor to section 3)
    - Contact Us → `/contact/`
- **Layout:** Horizontal
- **Pointer:** None
- **Typography:** Poppins, 14px, Weight 500
- **Color:** `#475569`
- **Hover Color:** `#1E3A6E`
- **Mobile Breakpoint:** Tablet (hamburger shows below 1024px)
- **Toggle Button Color:** `#1E3A6E`
- **Dropdown:** Background `#fff`, border `#E2E8F0`, border-radius 14px, shadow `0 4px 16px rgba(0,0,0,.10)`
- **Flex:** Grow 1, Justify: Center, Gap: 32px

### 6. Header Actions Container

Add a **Container** as the third child:
- **Layout:** Flex, Row, Align Center, Gap: 12px
- **Flex:** Shrink 0

Inside this container, add two widgets:

**Widget A — Sign In link:**
- Widget type: **Button**
- Text: `Sign In`
- Link: `/login/`
- **Style:** None (text only appearance)
- **Typography:** Poppins 500 14px, `#1E3A6E`
- **Background:** None / transparent
- **Border:** None
- **Padding:** 0
- **Hover text color:** `#E8536A`

**Widget B — Join Free CTA:**
- Widget type: **Button**
- Text: `Join Free`
- Link: `/register/`
- **Typography:** Poppins 600 14px, `#FFFFFF`
- **Background:** `#E8536A`
- **Border Radius:** 100px
- **Padding:** 10px 22px
- **Hover background:** `#d44460`
- **Hover transform:** translateY(-2px) (via Advanced → Custom CSS:)
  ```css
  transition: transform .25s ease, background .25s ease;
  ```
  ```css
  selector:hover { transform: translateY(-2px); background: #d44460; }
  ```

### 7. Mobile Responsive Adjustments

Switch editor to **Tablet** breakpoint:
- The Nav Menu will automatically collapse to hamburger
- Header Actions: hide the Sign In text link (set display: none at mobile)
- Logo: reduce width to 130px

Switch to **Mobile** breakpoint:
- Inner container padding: 0 16px
- Join Free button padding: 8px 16px

### 8. Publish & Assign

1. Click **Publish**
2. In the conditions panel: **Include → Entire Site**
3. Click **Save & Close**

---

## Accessibility Checklist

- [ ] Logo `<a>` has `aria-label="H2H Dating — Home"`
- [ ] Nav has `role="navigation"` (Elementor Nav Menu adds this automatically)
- [ ] All buttons have visible focus states (see Global Custom CSS from Step 0)
- [ ] Mobile hamburger button has `aria-label="Open menu"`
