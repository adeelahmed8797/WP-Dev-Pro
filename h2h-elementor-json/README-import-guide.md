# H2H Dating — Elementor JSON Import Guide

**Brand Colors:** #BE0002 · #E5C162 · #000000  
**Stack:** WordPress · Elementor Pro (Flexbox Containers) · Ultimate Member  
**Files:** 7 JSON templates + SEO content

---

## Files in This Package

```
h2h-elementor-json/
├── README-import-guide.md          ← You are here
├── seo-content.md                  ← All homepage copy + SEO meta tags
├── h2h-header.json                 ← Sticky black header (Theme Builder)
├── h2h-footer.json                 ← Dark footer (Theme Builder)
├── h2h-section-1-hero.json         ← Hero + stats strip
├── h2h-section-2-features.json     ← "Finally, a Dating Site That Respects You"
├── h2h-section-3-how-it-works.json ← 3-step process
├── h2h-section-4-testimonials.json ← Testimonials + stats
└── h2h-section-5-cta.json          ← Final CTA banner (red)
```

---

## Step 0 — Before You Import (Do This First)

### A. Enable Flexbox Containers
1. **Elementor → Settings → Features**
2. Toggle **Flexbox Container** → ON
3. Save Settings

### B. Add Google Fonts (Global CSS)
1. **Elementor → Site Settings → Custom CSS**
2. Paste:
```css
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap');
```

### C. Set Global Colors
**Elementor → Site Settings → Global Colors** — Add these:

| Name           | Hex       |
|----------------|-----------|
| H2H Red        | #BE0002   |
| H2H Gold       | #E5C162   |
| H2H Black      | #000000   |
| H2H White      | #FFFFFF   |
| H2H Light Gray | #F5F5F5   |
| H2H Text Gray  | #555555   |

### D. Set Global Fonts
**Elementor → Site Settings → Global Fonts:**
- Primary Font → **Poppins** (headings)
- Secondary Font → **Inter** (body)

### E. Upload Your Logo
1. **WordPress → Media → Add New**
2. Upload your H2H logo file
3. **Copy the URL** — you'll need it when setting up the header

---

## Step 1 — Import the Header

The header is imported via **Theme Builder** (requires Elementor Pro).

1. Go to **Elementor → Templates → Theme Builder**
2. Click **Add New** → Choose type: **Header**
3. Give it a name: `H2H Header`
4. In the Elementor editor, click the **folder icon** (Add Template)
5. Go to **My Templates** tab → click **Import Templates**
6. Upload `h2h-header.json`
7. The header template will appear — click **Insert**
8. **Find the Image widget** (logo placeholder) → click it
9. Replace `YOUR_LOGO_URL_HERE` with your actual logo from Media Library
10. Click **Publish** → Set display conditions:
    - **Include → Entire Site**
11. Click **Save & Close**

---

## Step 2 — Import the Footer

Same process as header:

1. **Elementor → Templates → Theme Builder → Add New → Footer**
2. Name: `H2H Footer`
3. Click folder → My Templates → Import → Upload `h2h-footer.json`
4. Insert the template
5. **Find the Image widget** → replace `YOUR_LOGO_URL_HERE` with your logo URL
6. Update all navigation links if your WordPress slugs are different
7. **Publish** → Display conditions: **Include → Entire Site**

---

## Step 3 — Import Sections (Hero, Features, etc.)

Each section (1–5) imports as a **Saved Template** and gets added to a page.

### A. Import All 5 Section JSON Files

1. Go to **Elementor → Templates → Saved Templates**
2. Click **Import Templates** (top right)
3. Upload `h2h-section-1-hero.json` → Repeat for sections 2–5
4. All 5 sections now appear in your Saved Templates list

### B. Add Sections to Your Homepage

1. Go to **WordPress → Pages** → Open your Homepage
2. Click **Edit with Elementor**
3. **Delete any existing content** (or start fresh on a blank page)
4. Click the **"+" icon** to add a new section/template
5. Click the **folder icon** → **My Templates** tab
6. Find `H2H Section 1 — Hero` → click **Insert**
7. Repeat for sections 2, 3, 4, 5 — insert them in order
8. **Update/Publish** the page

---

## Step 4 — Replace Image Placeholders

After importing, find and replace these placeholder URLs:

| Placeholder              | Widget Location              | What to Upload                        |
|--------------------------|------------------------------|---------------------------------------|
| `YOUR_LOGO_URL_HERE`     | Header & Footer Image widget | Your H2H logo PNG/WebP                |
| `YOUR_HERO_COUPLE_IMAGE_URL` | Section 1, right column  | Hero couple photo (900×1100px, WebP)  |

**How to replace an image:**
1. Click the Image widget in Elementor
2. Under "Image" → click the current image / URL
3. Select from Media Library or upload new image

---

## Step 5 — Update Navigation Links

Check these URLs match your WordPress setup:

| Button / Link     | Expected URL        |
|-------------------|---------------------|
| Join Free buttons | `/register/`        |
| Sign In buttons   | `/login/`           |
| Logo link         | `/`                 |

If your UM registration page has a different slug, update all button links:
1. Click the Button widget
2. Under "Link" → change the URL

---

## Step 6 — Set Homepage in WordPress

1. **WordPress → Settings → Reading**
2. **Your homepage displays:** A static page
3. **Homepage:** Select your H2H homepage page
4. Save Changes

---

## Step 7 — SEO Setup

1. Open `seo-content.md` from this package
2. **Rank Math / Yoast → Homepage settings:**
   - Paste the SEO Title
   - Paste the Meta Description
   - Set Focus Keyword: `free online dating site USA`
3. Add FAQ schema (see seo-content.md → FAQ Schema section)

---

## Troubleshooting

### "Container not found" or layout broken after import
- Make sure **Flexbox Containers** is enabled (Step 0A above)
- If using older Elementor without containers, upgrade to Elementor 3.6+

### Nav Menu widget shows "No menu" 
- Go to **WordPress → Appearance → Menus**
- Create a menu named `main-menu` with your nav links
- Assign it to the Primary location
- The Nav Menu widget will auto-populate

### Fonts not loading
- Make sure the Google Fonts @import is in **Site Settings → Custom CSS**
- Or install the fonts via **Elementor → Site Settings → Global Fonts** using the Elementor font library

### Logo appears too large/small
- Click the Image widget → adjust the **Width** setting
- Recommended: 110–140px for header, 110px for footer

### Colors look wrong
- All colors are hardcoded in the JSON (#BE0002, #E5C162, #000000)
- If you set up Global Colors in Step 0C, you can optionally remap them in each widget

---

## Design Reference

### Color System
| Color   | Hex       | Usage                                    |
|---------|-----------|------------------------------------------|
| Red     | #BE0002   | Primary CTAs, eyebrow chips, step numbers, accents |
| Gold    | #E5C162   | Highlighted words, button text on red, stars, accent |
| Black   | #000000   | Hero bg, testimonials bg, dark cards     |
| White   | #FFFFFF   | Light section backgrounds, card bgs      |
| Gray    | #F5F5F5   | How It Works section background          |
| Text    | #555555   | Body text on light backgrounds           |

### Section Layout
| Section | Background | Key Color |
|---------|------------|-----------|
| Hero    | Black      | Gold headline, Red stat bar |
| Features | White     | Red card top borders, Black accent card |
| How It Works | Light Gray | Red step numbers, Black featured card |
| Testimonials | Black   | Red/dark cards, Red featured card center |
| CTA     | Red        | Gold headline, Gold CTA button |

### Button Hierarchy
1. **Gold button** (most important CTAs): bg `#E5C162`, text `#000000`
2. **Red button** (section CTAs): bg `#BE0002`, text `#E5C162`, border `#E5C162`
3. **Outline white** (secondary on dark): transparent bg, white border & text
4. **Header Join Free**: Red bg, Gold text, Gold border

---

## Required Elementor Pro Widgets Used

| Widget       | Used In              | Notes                               |
|--------------|----------------------|-------------------------------------|
| Container    | All sections         | Flexbox layout — requires Elementor Pro or free 3.6+ |
| Heading      | All sections         | Free widget                         |
| Text Editor  | All sections         | Free widget (used for rich HTML chips/cards) |
| Button       | Hero, Steps, CTA     | Free widget                         |
| Image        | Header, Footer, Hero | Free widget                         |
| Nav Menu     | Header               | **Requires Elementor Pro**          |
| Divider      | Footer, Stats strip  | Free widget                         |

> **Note:** The Nav Menu widget in the header requires **Elementor Pro**. If you don't
> have Pro, replace it with a Text Editor widget containing `<nav>` HTML links styled
> to match (white text, Poppins 15px, horizontal flex row).

---

## Ultimate Member Integration

All "Join Free" buttons link to `/register/` — UM handles this page automatically.

**For conditional content (logged-in vs logged-out):**
```
[um_loggedout]
  <!-- Hero section, Join CTAs — show to guests only -->
[/um_loggedout]

[um_loggedin]
  Welcome back, [current_user_displayname]! 
[/um_loggedin]
```

Wrap the hero section shortcode widget if you want to hide it from logged-in users.
