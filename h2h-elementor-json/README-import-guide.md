# H2H Dating — Elementor JSON Import Guide (v2)

**Brand Colors:** #BE0002 (Red) · #E5C162 (Gold) · #000000 (Black)
**Stack:** WordPress · Elementor Pro 3.6+ (Flexbox Containers) · Ultimate Member
**Design Style:** Asymmetric, premium — inspired by modern dating platforms

---

## Files in This Package

```
h2h-elementor-json/
├── README-import-guide.md             ← You are here
├── seo-content.md                     ← All homepage copy + meta tags + FAQ schema
│
├── h2h-header.json                    ← Sticky black header (Theme Builder)
├── h2h-footer.json                    ← Dark footer (Theme Builder)
│
├── h2h-section-1-hero.json            ← Hero + animated stats strip
├── h2h-section-2-how-it-works.json    ← 3-step process (Red / Gold / Black cards)
├── h2h-section-3-why-h2h.json         ← Icon-box accordion + image (like reference site)
├── h2h-section-4-testimonials.json    ← Large photo + quote + 2 mini cards
└── h2h-section-5-cta.json             ← Red CTA banner + feature checklist
```

### Recommended Homepage Section Order
Insert sections in this order for best conversion flow:
1. Hero → 2. How It Works → 3. Why H2H → 4. Testimonials → 5. CTA

---

## Widgets Used (All Proper Elementor Widgets — No Raw HTML)

| Widget | Used For |
|--------|----------|
| `heading` | All headings (H1–H6), eyebrow labels, stat numbers, trust badges |
| `text-editor` | Body paragraphs only — plain `<p>` tags |
| `button` | All CTA buttons |
| `image` | All photos |
| `icon` | Standalone decorative icons (trust badges in hero) |
| `icon-box` | Feature items in Section 3 (icon + title + description combined) |
| `counter` | Animated stat numbers in hero stats strip |
| `star-rating` | Review stars in testimonials |
| `divider` | Separator lines between features |
| `nav-menu` | Header navigation (requires Elementor Pro) |

> **Note:** No complex HTML is embedded in text-editor widgets.
> Icons use Font Awesome via Elementor's native icon picker.

---

## Step 0 — Before You Import (Do This First)

### A. Enable Flexbox Containers
1. **Elementor → Settings → Features**
2. Toggle **Flexbox Container** → ON
3. Click **Save Settings**

### B. Add Google Fonts (Global CSS)
1. **Elementor → Site Settings → Custom CSS**
2. Paste this at the top:
```css
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap');
```

### C. Set Global Colors
**Elementor → Site Settings → Global Colors** → Add:

| Name           | Hex       |
|----------------|-----------|
| H2H Red        | #BE0002   |
| H2H Gold       | #E5C162   |
| H2H Black      | #000000   |
| H2H White      | #FFFFFF   |
| H2H Gray       | #F7F7F7   |

### D. Set Global Fonts
**Elementor → Site Settings → Global Fonts:**
- Primary → **Poppins** (headings)
- Secondary → **Inter** (body text)

### E. Upload Images to Media Library
Upload these before building (see seo-content.md for AI generation prompts):

| Image                          | Where Used         | Size           |
|--------------------------------|--------------------|----------------|
| H2H logo (black background)    | Header + Footer    | 240×120px      |
| Hero couple photo              | Section 1, right   | 900×1100px     |
| Features couple photo          | Section 3, right   | 800×1000px     |
| Testimonial couple photo       | Section 4, left    | 700×900px      |

---

## Step 1 — Import the Header (Theme Builder)

1. **Elementor → Templates → Theme Builder → Add New → Header**
2. Name: `H2H Header` → Click **Create Template**
3. In the editor, click the **folder icon** → **My Templates** tab
4. Click **Import Templates** → upload `h2h-header.json`
5. The template appears — click **Insert**
6. Click the **Image widget** (logo) → replace `YOUR_LOGO_URL_HERE` with your logo
7. Click the **Nav Menu widget** → select your WordPress menu from the dropdown
8. Click **Publish** → Display Conditions: **Include → Entire Site** → **Save & Close**

---

## Step 2 — Import the Footer (Theme Builder)

1. **Elementor → Templates → Theme Builder → Add New → Footer**
2. Name: `H2H Footer` → **Create Template**
3. Folder icon → My Templates → Import → `h2h-footer.json` → **Insert**
4. Find the **Image widget** → replace `YOUR_LOGO_URL_HERE`
5. Update navigation link URLs if your slugs differ from `/about/`, `/contact/`, etc.
6. **Publish** → Display: **Entire Site** → **Save & Close**

---

## Step 3 — Import Sections to Homepage

### A. Import All 5 Section Files
1. **Elementor → Templates → Saved Templates → Import Templates**
2. Upload files one by one:
   - `h2h-section-1-hero.json`
   - `h2h-section-2-how-it-works.json`
   - `h2h-section-3-why-h2h.json`
   - `h2h-section-4-testimonials.json`
   - `h2h-section-5-cta.json`

### B. Add to Homepage
1. **WordPress → Pages** → open your Homepage → **Edit with Elementor**
2. Delete existing content (start clean)
3. Click **"+"** → click the **folder icon** → **My Templates**
4. Insert sections in order: 1 → 2 → 3 → 4 → 5
5. **Update/Publish**

---

## Step 4 — Replace Image Placeholders

After import, find these in the Elementor editor and replace:

| Placeholder                    | Widget      | Section   |
|--------------------------------|-------------|-----------|
| `YOUR_LOGO_URL_HERE`           | Image       | Header, Footer |
| `YOUR_HERO_COUPLE_IMAGE_URL`   | Image       | Section 1 right column |
| `YOUR_FEATURES_COUPLE_IMAGE_URL` | Image     | Section 3 right column |
| `YOUR_TESTIMONIAL_COUPLE_IMAGE_URL` | Image  | Section 4 left column |

---

## Step 5 — Configure the Nav Menu Widget

1. **WordPress → Appearance → Menus → Create New Menu**
2. Name it: `Main Menu`
3. Add pages: Home, How It Works, About, Contact
4. Save menu → assign to **Primary** location
5. In Elementor header, click **Nav Menu widget** → select `Main Menu`

---

## Step 6 — Set Homepage in WordPress

1. **WordPress → Settings → Reading**
2. **Your homepage displays:** A static page
3. **Homepage:** Select your H2H page
4. **Save Changes**

---

## Step 7 — SEO Setup

1. Open `seo-content.md` from this package
2. In **Rank Math / Yoast** on the homepage:
   - Paste the SEO Title (under 60 chars)
   - Paste Meta Description (under 160 chars)
   - Set Focus Keyword: `free online dating site USA`
3. Add FAQ Schema (copy from seo-content.md)

---

## Design System Reference

### Section Backgrounds
| Section          | Background | Text Colors              |
|------------------|------------|--------------------------|
| Hero             | #000000    | White H1, Gold accent    |
| Stats Strip      | #BE0002    | Gold numbers, White labels |
| How It Works     | #FFFFFF    | 3 cards: Red / Gold / Black |
| Why H2H          | #F7F7F7    | Black text, Red icons    |
| Testimonials     | #000000    | White, Gold stars        |
| CTA              | #BE0002    | White headline, Gold button |
| Header           | #000000    | White nav, Gold hover    |
| Footer           | #000000    | Gray text, Gold column titles |

### Button Types Used
| Style            | Where         | bg → text              |
|------------------|---------------|------------------------|
| Gold Primary     | Hero, CTA     | #E5C162 → #000000      |
| White Outline    | Hero (Sign In)| transparent → #FFFFFF  |
| Gold Outline     | How It Works card 1 | transparent → #E5C162 |
| Black Outline    | How It Works card 2 | transparent → #000000 |
| Red Filled       | How It Works card 3 | #BE0002 → #E5C162  |

### Typography Scale
| Element         | Font    | Size (desktop) | Weight |
|-----------------|---------|----------------|--------|
| H1 (Hero)       | Poppins | 62px           | 800    |
| H2 (Sections)   | Poppins | 42–44px        | 700    |
| H3 (Cards)      | Poppins | 19–22px        | 700    |
| Eyebrow Labels  | Poppins | 13px           | 700    |
| Body Text       | Inter   | 15–18px        | 400    |
| Counter Numbers | Poppins | 42px           | 800    |

---

## Troubleshooting

| Problem | Fix |
|---------|-----|
| "Container" not recognized | Enable Flexbox Containers in Elementor → Settings → Features |
| Icons not showing | Elementor uses Font Awesome — ensure it's loaded (Elementor → Settings → Experiments or via enqueue) |
| Counter widget not animating | Add `data-counter` or check Elementor version ≥ 3.4 |
| Nav Menu shows "No menu" | Create menu in WP Admin → Appearance → Menus first |
| Fonts look wrong | Check @import in Site Settings → Custom CSS |
| Logo too large | Click Image widget → adjust Width to 110px in header, 90px in footer |

---

## Ultimate Member Integration

All "Join Free" buttons → `/register/` (UM handles this page)
All "Sign In" links → `/login/`

For conditional display:
```
[um_loggedout]  Show hero + CTAs to guests only  [/um_loggedout]
[um_loggedin]   Show welcome message to members  [/um_loggedin]
```
