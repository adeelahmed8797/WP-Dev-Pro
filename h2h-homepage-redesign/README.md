# H2H Dating — Homepage Redesign Package

**Site:** stage.h2hdating.com  
**Stack:** WordPress · Elementor Pro · Ultimate Member  
**Design system:** Poppins + Inter · Navy/Coral/Amber palette · Flexbox Containers

---

## What's in This Package

```
h2h-homepage-redesign/
├── README.md                              ← You are here
├── style-guide.md                         ← Colors, fonts, spacing, buttons
├── html-mockups/
│   └── h2h-homepage-preview.html          ← Full-page pixel-accurate preview
└── elementor-build-instructions/
    ├── 00-setup-and-fonts.md              ← Do this FIRST
    ├── 01-header.md                       ← Sticky header template
    ├── 02-footer.md                       ← Dark footer template
    ├── 03-section-1-hero.md               ← Hero + stats strip
    ├── 04-section-2-features.md           ← "What Makes Us Different"
    ├── 05-section-3-how-it-works.md       ← 3-step process
    ├── 06-section-4-testimonials.md       ← Social proof cards
    └── 07-section-5-cta.md               ← Final CTA banner
```

---

## Quick Start: Build Order

Follow this exact order to avoid re-work:

1. **[Step 0] Setup** — global colors, fonts, custom CSS, breakpoints
2. **[Step 1] Header** — build & publish to Theme Builder
3. **[Step 2] Footer** — build & publish to Theme Builder
4. **[Step 3] Open Homepage** in Elementor (or create a new Page template)
5. **[Steps 3–7] Build Sections** in order (Hero → Features → How It Works → Testimonials → CTA)
6. **Preview** on desktop, tablet, and mobile before publishing
7. **Export** each section as a Saved Template (see below)

---

## Exporting Sections as JSON Templates

After building each section, export it for portability:

1. Right-click the root container of the section → **Save as Template**
2. Name it clearly (e.g., `H2H Section 1 — Hero`)
3. Go to **Elementor → Templates → Saved Templates**
4. Find your template → click the three-dot menu → **Export**
5. Rename the downloaded file:

| Template              | File name                       |
|-----------------------|---------------------------------|
| Header                | `h2h-header.json`               |
| Footer                | `h2h-footer.json`               |
| Section 1 — Hero      | `h2h-section-1-hero.json`       |
| Section 2 — Features  | `h2h-section-2-features.json`   |
| Section 3 — How It Works | `h2h-section-3-how-it-works.json` |
| Section 4 — Testimonials | `h2h-section-4-testimonials.json` |
| Section 5 — CTA       | `h2h-section-5-cta.json`        |

---

## Importing Templates (on another Elementor install)

1. **Elementor → Templates → Saved Templates → Import Templates**
2. Upload the `.json` file
3. The template will appear in your Saved Templates list
4. Insert it on any page via **Add Template** button in the Elementor editor

**For Header/Footer templates:**
1. **Elementor → Templates → Theme Builder**
2. Click **Add New** → choose type (Header or Footer)
3. Click the folder icon → **My Templates** → select the imported template
4. Set display conditions: **Include → Entire Site**
5. Click **Save & Close**

---

## Ultimate Member Integration

### Setting Up Registration & Login Pages

1. In WordPress Admin → **Ultimate Member → Pages** — note the page IDs for Registration and Login
2. All "Join Free" / "Sign Up" buttons in the design link to `/register/` (UM auto-manages this)
3. All "Sign In" buttons link to `/login/`
4. After login, UM redirects to the user profile/dashboard automatically

### Shortcodes (if building custom pages)

```
Registration form:  [ultimatemember form_id="YOUR_REG_FORM_ID"]
Login form:         [ultimatemember form_id="YOUR_LOGIN_FORM_ID"]
User profile:       [ultimatemember]
Members directory:  [ultimatemember_directory]
```

Find your form IDs: **Ultimate Member → Forms** in the WP admin panel.

### Conditional Display (show content only to logged-out users)

Use UM's built-in Elementor integration or add this shortcode inside a Shortcode widget:
```
[um_loggedout]
  Your guest-only content here (Join CTAs, hero section)
[/um_loggedout]

[um_loggedin]
  Welcome back, [current_user_displayname]!
[/um_loggedin]
```

---

## Required Images

Prepare and upload these to the WordPress Media Library before building:

| Filename                  | Section          | Dimensions    | Format | Notes                               |
|---------------------------|------------------|---------------|--------|-------------------------------------|
| `hero-couple-1.webp`      | Hero (Sec 1)     | 800 × 1000px  | WebP   | Authentic couple, warm tones        |
| `features-bg.webp`        | Features (Sec 2) | 1920 × 200px  | WebP   | Optional subtle texture (optional)  |
| `how-it-works-illus.webp` | How It Works (Sec 3) | 1200 × 400px | WebP | Optional supporting illustration   |
| `testimonial-bg.webp`     | Testimonials (Sec 4) | 1920 × 200px | WebP | Optional texture (can skip)        |
| `cta-bg.webp`             | CTA (Sec 5)      | 1920 × 900px  | WebP   | Couple silhouette, golden hour      |

**Image optimization tools:**
- [Squoosh](https://squoosh.app) — free, browser-based, WebP conversion
- ShortPixel WordPress plugin — auto-compress on upload
- All images should be < 200KB after WebP compression

**AI image generation prompts (for Midjourney / DALL-E / Ideogram):**

*Hero couple:*
> "Authentic photo of a happy American couple in their 30s, candid moment, warm golden light, casual clothes, diverse, natural smiles, shallow depth of field, neutral background, photorealistic, editorial photography style, warm color grade --ar 4:5"

*CTA background:*
> "Soft silhouette of a couple outdoors at golden hour, park or city background, warm amber tones, bokeh, romantic but tasteful, photorealistic, wide landscape --ar 16:9"

---

## Responsive Testing Checklist

After building, test at these exact sizes:

| Device         | Width   | Key checks |
|----------------|---------|------------|
| Desktop HD     | 1440px  | Max-width containers centered, hero 2-col layout |
| Desktop        | 1280px  | Features 4-col, stats 4-col |
| Tablet         | 1024px  | Nav collapses to hamburger, features 2-col |
| Tablet Small   | 768px   | Hero stacks, stats 2x2 |
| Mobile Large   | 414px   | Single column, CTA buttons stacked |
| Mobile Small   | 375px   | H1 fits without overflow, buttons full-width |

**Check specifically:**
- [ ] Sticky header doesn't cover anchor-linked sections (add `scroll-margin-top: 80px` to anchor elements)
- [ ] Float cards on hero don't overflow viewport on tablet
- [ ] Testimonial card text is fully readable at 375px
- [ ] All buttons and links have visible focus rings (keyboard nav)
- [ ] Footer "Not affiliated" notice wraps cleanly

---

## Performance Checklist

- [ ] All images converted to WebP and lazy-loaded (`loading="lazy"` in Elementor Image widget)
- [ ] Hero image is NOT lazy-loaded (it is the LCP — Elementor → Advanced → Lazy Load → OFF for hero image)
- [ ] Google Fonts loaded via `@import` in Site Settings Custom CSS (avoid render-blocking `<link>`)
- [ ] WP Rocket or LiteSpeed Cache configured for page caching
- [ ] Cloudflare proxy enabled
- [ ] Elementor CSS Print Method: External File (Elementor → Settings → Advanced)

---

## SEO Setup (Rank Math or Yoast)

**Homepage meta:**
```
Title:       H2H Dating — 100% Free, AI-Free US Online Dating | No Algorithms
Description: Join H2H Dating — the only 100% free US dating site with no paywalls,
             no ELO scores, real-time chat, video calling, and human verification.
             Invite-only. No credit card needed.
```

**H1 (one per page):** Already set in the Hero section — "Welcome to 100% Free, AI-Free US Dating"

**Schema markup to add (via Rank Math → Schema → Add Schema):**
- Type: `Organization`
  - Name: H2H Dating
  - URL: https://h2hdating.com
  - Description: (same as meta description)
- Type: `FAQPage` (add FAQs below the how-it-works section)
  - Q: Is H2H Dating really free? A: Yes, 100% free forever — no credit card, no subscriptions.
  - Q: How does human verification work? A: Our team reviews every profile manually, no biometrics needed.

---

## Brand Voice Reminders

When writing any additional copy for this site:
- ❌ Avoid: "swipe," "match," "premium," "boost," "algorithm," "AI-powered"
- ✅ Use: "connect," "meet," "find," "genuine," "real," "free," "human," "community"
- Tone: Direct, warm, slightly indignant about the industry, never salesy
- The brand's edge: calling out what's wrong with other apps (paywalls, ELO) is the core message

---

## Support & Questions

For questions about this design package, refer to the `style-guide.md` for all
design tokens and the section-specific `.md` files in `elementor-build-instructions/`
for widget-by-widget implementation details.

Preview the full design by opening `html-mockups/h2h-homepage-preview.html`
in any browser — no server required.
