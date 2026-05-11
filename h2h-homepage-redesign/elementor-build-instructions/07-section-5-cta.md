# Step 7 — Section 5: Final CTA / Join Banner (h2h-section-5-cta)

**Where to build:** Below Section 4 (testimonials), immediately above the footer

---

## Overview

A bold, emotionally resonant closing section on a dark navy gradient background:
- Eyebrow chip in amber
- Large H2 headline with amber highlight
- Supporting paragraph
- Two CTAs (Join Free + Watch How It Works)
- Secondary "Already a member? Sign in" link
- Disclaimer strip: not affiliated / US-based / data privacy

Optional: subtle background image of a couple at 15% opacity behind the gradient.

---

## Container Structure

```
Container: section-cta (full-width, dark gradient bg, text-center)
  └── Container: cta-inner (max-width 760px, centered)
        ├── Widget: Text (eyebrow chip)
        ├── Widget: Heading / Text Editor (H2)
        ├── Widget: Text (sub paragraph)
        ├── Container: cta-buttons (flex row, centered)
        │     ├── Widget: Button (Join Free — primary amber)
        │     └── Widget: Button (Watch How It Works — outline)
        ├── Widget: Text (sign-in link)
        └── Container: disclaimer-strip (flex row, centered)
              ├── Widget: Text (not affiliated)
              ├── Widget: Text (US-based)
              └── Widget: Text (data privacy)
```

---

## Step-by-Step Build

### 1. Section Root Container

- **Background:** Gradient
  - Color 1: `#0D2045` at 0%
  - Color 2: `#1E3A6E` at 55%
  - Color 3: `#2B52A0` at 100%
  - Angle: 155°
- **Padding:** 120px 0 (desktop), 80px 0 (tablet), 64px 0 (mobile)
- **Width:** 100%
- **Text-align:** Center
- **Overflow:** Hidden
- **Position:** Relative

**Optional background image (on root container):**
- Background Type: Classic + Gradient overlay
- Add image: `section-5-cta-bg.webp` (soft couple silhouette, warm lighting)
- Position: Center Center, Size: Cover
- Overlay: Gradient from `rgba(13,32,69,.88)` to `rgba(43,82,160,.88)` at 155°
- This creates the dark overlay so text remains readable

**Radial glow overlay (Custom CSS on root):**
```css
selector { position: relative; }
selector::before {
  content: '';
  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  width: 900px; height: 600px;
  background: radial-gradient(ellipse, rgba(232,83,106,.15) 0%, transparent 70%);
  pointer-events: none;
  z-index: 0;
}
```

### 2. Inner Container (max-width 760px)

Inside root:
- **Max-width:** 760px, Width: 100%, Margin: 0 auto, Padding: 0 24px
- **Layout:** Flex, Column, Align: Center, Gap: 0
- **Z-index:** 1
- **Text-align:** Center

### 3. Eyebrow Chip

**Widget: Text Editor**
```html
<div style="display:inline-flex;align-items:center;gap:8px;background:rgba(245,158,11,.15);border:1px solid rgba(245,158,11,.25);color:#FCD34D;font-family:'Poppins',sans-serif;font-size:12px;font-weight:600;letter-spacing:.10em;text-transform:uppercase;padding:7px 16px;border-radius:100px;margin-bottom:24px;">
  💛 &nbsp;100% Free · No Credit Card · No Algorithms
</div>
```

### 4. H2 Headline

**Widget: Text Editor** (for gradient word):
```html
<h2 style="font-family:'Poppins',sans-serif;font-size:64px;font-weight:800;line-height:1.12;letter-spacing:-0.02em;color:#fff;margin-bottom:20px;">
  Stop Paying for Love.<br>
  <span style="color:#FCD34D;">Start Finding It.</span>
</h2>
```
- Desktop: 64px
- Tablet: 44px
- Mobile: 36px

### 5. Sub-Paragraph

**Widget: Text Editor**
```html
<p style="font-family:'Inter',sans-serif;font-size:18px;color:rgba(255,255,255,.70);line-height:1.70;margin-bottom:40px;max-width:620px;">
  Join thousands of real, verified US singles who chose honesty over algorithms.
  Your next meaningful connection is one click away — and it won't cost you a thing.
</p>
```
- Mobile font-size: 16px

### 6. CTA Buttons Container

Add a Container:
- **Layout:** Flex, Row, Wrap, Justify: Center, Gap: 14px
- **Margin-bottom:** 28px

**Button 1 — Join H2H Free Now:**
- Text: `❤️ Join H2H Free Now`
- Link: `/register/`
- Typography: Poppins 600, 17px
- Background: `#F59E0B`
- Text color: `#0F172A`
- Border radius: 100px
- Padding: 18px 40px
- Hover background: `#E8940A`
- Custom CSS:
  ```css
  selector { transition: transform .25s ease, box-shadow .25s ease; }
  selector:hover { transform: translateY(-2px); box-shadow: 0 4px 16px rgba(0,0,0,.25); }
  ```

**Button 2 — Watch How It Works:**
- Text: `▶ Watch How It Works`
- Link: `#how-it-works`
- Typography: Poppins 600, 17px
- Background: transparent
- Text color: `#FFFFFF`
- Border: 2px solid `rgba(255,255,255,.6)`
- Border radius: 100px
- Padding: 18px 40px
- Hover background: `rgba(255,255,255,.12)`
- Hover border: `#FFFFFF`

### 7. Sign-In Secondary Link

**Widget: Text Editor**
```html
<p style="margin-bottom:40px;">
  <a href="/login/" style="font-family:'Inter',sans-serif;font-size:14px;color:rgba(255,255,255,.6);text-decoration:none;transition:color .25s;">
    Already a member? <strong style="color:rgba(255,255,255,.85);font-weight:600;">Sign in here →</strong>
  </a>
</p>
```

### 8. Disclaimer Strip

Add a Container:
- **Layout:** Flex, Row, Wrap, Justify: Center, Gap: 32px
- **Padding-top:** 28px
- **Border-top:** 1px solid `rgba(255,255,255,.10)`
- **Margin-top:** 12px

Add 3 **Text Editor** widgets:

```html
<!-- Disclaimer 1 -->
<div style="display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.5);font-family:'Inter',sans-serif;font-size:12px;">
  <span style="font-size:14px;opacity:.7;">🏛️</span>
  Not affiliated with Match Group or any commercial dating platform
</div>

<!-- Disclaimer 2 -->
<div style="display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.5);font-family:'Inter',sans-serif;font-size:12px;">
  <span style="font-size:14px;opacity:.7;">🇺🇸</span>
  US-based, invite-only community
</div>

<!-- Disclaimer 3 -->
<div style="display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.5);font-family:'Inter',sans-serif;font-size:12px;">
  <span style="font-size:14px;opacity:.7;">🔒</span>
  Your data is never sold or shared
</div>
```

### 9. Motion Effects

**Eyebrow + headline container:** Fade In Up, 700ms
**CTA buttons:** Fade In Up, 600ms, 200ms delay
**Disclaimer strip:** Fade In, 500ms, 400ms delay

### 10. Responsive Adjustments

**Tablet (1024px):**
- H2: 44px
- CTA buttons: stack to column, full width, max-width 400px
- Disclaimer strip: column, align center

**Mobile (767px):**
- H2: 36px
- Sub paragraph: 16px
- Section padding: 64px 0
- Disclaimer items: column, gap 12px

---

## CTA Section Background Image Specification

**File:** `section-5-cta-bg.webp`
**Dimensions:** 1920 × 900px (landscape)
**Style:** Soft silhouette of a couple outdoors, warm golden-hour lighting, US setting (park, city, beach)
**Treatment:** Low saturation, blurred background, warm tones — will be overlaid at ~15% opacity
**Alt text:** Not needed (purely decorative — set alt="" in Elementor)
**Usage:** Set as background-image on the section root container, with the gradient overlay applied on top

---

## Export as Template (after building)

Once this section is built and reviewed:
1. Right-click the root container → Save as Template
2. Name: `H2H Section 5 — CTA`
3. Export: Templates → Saved Templates → Export
4. File will download as: `h2h-section-5-cta.json`
5. Repeat for all other sections and the header/footer
