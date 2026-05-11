# Step 3 — Section 1: Hero (h2h-section-1-hero)

**Where to build:** Homepage template or directly on the page in Elementor

---

## Overview

Full-viewport dark hero section with:
- Left: Eyebrow chip → H1 headline → sub-paragraph → dual CTA buttons → 3 trust badges
- Right: Hero image with 3 floating UI cards (animated)
- Background: Deep navy gradient with radial glows

---

## Container Structure

```
Container: hero-section (full-width, min-height 92vh)
  ├── [Background: gradient + pseudo-element glows]
  └── Container: hero-inner (max-width 1200px)
        ├── Container: hero-copy   [flex: 1]
        │     ├── Widget: Text (eyebrow chip)
        │     ├── Widget: Heading (H1)
        │     ├── Widget: Text (subheadline)
        │     ├── Container: cta-row
        │     │     ├── Widget: Button (Join Free)
        │     │     └── Widget: Button (Why Choose Us)
        │     └── Container: badges-row
        │           ├── Widget: Icon Box (Free Forever)
        │           ├── Widget: Icon Box (No Algorithms)
        │           └── Widget: Icon Box (Verified Humans)
        └── Container: hero-visual [flex: 1]
              ├── Widget: Image (hero couple photo)
              ├── Widget: Text/Image (float card 1 — Verified)
              ├── Widget: Text/Image (float card 2 — Chat)
              └── Widget: Text/Image (float card 3 — $0 Forever)
```

---

## Step-by-Step Build

### 1. Add a New Template or Open the Page

- If building as a **Page Template**: Elementor → Templates → Add New → Page
- Name: `H2H Homepage`
- Or open the homepage directly in Elementor

### 2. Hero Root Container

Add a new **Container** (this is the full-width hero):

**Layout tab:**
- Direction: Row
- Align Items: Center
- Justify Content: Center
- Min Height: 92vh
- Width: 100%

**Style tab:**
- Background Type: Gradient
  - Color 1: `#0D2045` at 0%
  - Color 2: `#1E3A6E` at 45%
  - Color 3: `#2B52A0` at 100%
  - Angle: 155°
- Overflow: Hidden

**Advanced tab:**
- Padding: 100px 0 80px (desktop)

**Custom CSS (on hero root container):**
```css
selector { position: relative; }

/* Rose glow — top right */
selector::before {
  content: '';
  position: absolute;
  top: -200px; right: -200px;
  width: 700px; height: 700px;
  background: radial-gradient(circle, rgba(232,83,106,.18) 0%, transparent 70%);
  pointer-events: none;
  z-index: 0;
}

/* Amber glow — bottom left */
selector::after {
  content: '';
  position: absolute;
  bottom: -150px; left: -150px;
  width: 500px; height: 500px;
  background: radial-gradient(circle, rgba(245,158,11,.12) 0%, transparent 70%);
  pointer-events: none;
  z-index: 0;
}
```

### 3. Inner Container (max-width wrapper)

Inside hero root, add a Container:
- Layout: Flex, Row, Align Center, Gap: 64px
- Width: 100%, Max-width: 1200px
- Margin: 0 auto
- Padding: 0 24px
- Z-index: 1 (to appear above the pseudo-element glows)

### 4. Hero Copy Container (left half)

Inside the inner container, add a Container:
- **Flex:** Grow 1, Shrink 1, Basis: 50%
- Layout: Flex, Column, Gap: 0

**A. Eyebrow chip — use Text Editor widget:**
```html
<span style="
  display:inline-flex; align-items:center; gap:8px;
  background:rgba(245,158,11,.15); border:1px solid rgba(245,158,11,.3);
  color:#FCD34D; font-family:'Poppins',sans-serif; font-size:12px;
  font-weight:600; letter-spacing:.08em; text-transform:uppercase;
  padding:7px 14px; border-radius:100px; margin-bottom:20px;
">
  💛 &nbsp;Invite-Only · US-Based Community
</span>
```

**B. H1 Heading widget:**
- Text: `Welcome to 100% Free, AI-Free US Dating`
- Tag: H1
- Typography: Poppins 800, clamp(36px → 64px) — set 64px desktop, 48px tablet, 36px mobile
- Color: `#FFFFFF`
- Letter spacing: -0.02em
- Line height: 1.12
- Margin-bottom: 22px

  To highlight "100% Free, AI-Free" with gradient, use Text Editor instead of Heading:
  ```html
  <h1 style="font-family:'Poppins',sans-serif; font-size:64px; font-weight:800; line-height:1.12; letter-spacing:-0.02em; color:#fff; margin-bottom:22px;">
    Welcome to<br>
    <span style="background:linear-gradient(90deg,#F27A8E 0%,#FCD34D 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">
      100% Free,<br>AI-Free
    </span><br>
    US Dating
  </h1>
  ```

**C. Subheadline — Text Editor widget:**
- Content: `No algorithms deciding your worth. No paywalls blocking your messages. Just real humans, real conversations, and real connections — exactly the way dating should be.`
- Typography: Inter 400, 18px desktop / 16px mobile, line-height 1.75
- Color: `rgba(255,255,255,.75)`
- Max-width: 480px
- Margin-bottom: 36px

**D. CTA Row Container:**
- Layout: Flex, Row, Wrap, Gap: 14px
- Margin-bottom: 44px

  **Button 1 — Join Free:**
  - Text: `❤️ Join Free — No Card Needed`
  - Link: `/register/`
  - Typography: Poppins 600 17px
  - Background: `#F59E0B`
  - Text color: `#0F172A`
  - Border radius: 100px
  - Padding: 18px 40px
  - Hover background: `#E8940A`
  - Custom CSS: `selector { transition: transform .25s ease, box-shadow .25s ease; } selector:hover { transform: translateY(-2px); box-shadow: 0 4px 16px rgba(0,0,0,.20); }`

  **Button 2 — Why Choose Us:**
  - Text: `Why Choose Us`
  - Link: `#why-us`
  - Typography: Poppins 600 17px
  - Background: transparent
  - Text color: `#FFFFFF`
  - Border: 2px solid `rgba(255,255,255,.6)`
  - Border radius: 100px
  - Padding: 18px 40px
  - Hover background: `rgba(255,255,255,.12)`
  - Hover border: `#fff`

**E. Badges Row Container:**
- Layout: Flex, Row, Wrap, Gap: 20px

  Add 3 **Icon Box** widgets (or Text Editor):
  ```html
  <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,.85); font-family:'Inter',sans-serif; font-size:13px; font-weight:500;">
    <span style="width:28px;height:28px;background:rgba(34,197,94,.2);border:1px solid rgba(34,197,94,.4);border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:13px;">✓</span>
    Free Forever
  </div>
  <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,.85); font-family:'Inter',sans-serif; font-size:13px; font-weight:500;">
    <span style="width:28px;height:28px;background:rgba(34,197,94,.2);border:1px solid rgba(34,197,94,.4);border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:13px;">✓</span>
    No Algorithms
  </div>
  <div style="display:flex; align-items:center; gap:8px; color:rgba(255,255,255,.85); font-family:'Inter',sans-serif; font-size:13px; font-weight:500;">
    <span style="width:28px;height:28px;background:rgba(34,197,94,.2);border:1px solid rgba(34,197,94,.4);border-radius:50%;display:inline-flex;align-items:center;justify-content:center;font-size:13px;">✓</span>
    Verified Humans
  </div>
  ```
  Place this in a single **Text Editor** widget with the 3 divs in a flex wrapper.

### 5. Hero Visual Container (right half)

Inside the inner container, add a second Container:
- **Flex:** Grow 1, Shrink 1, Basis: 50%
- Layout: Flex, Column, Align: Center, Position: Relative
- Overflow: Visible

**A. Main Hero Image:**
- Widget: **Image**
- Upload: Hero couple photo (WebP, 800×1000px, authentic warm couple)
- Image placeholder alt: `Happy couple — authentic US dating community`
- **Width:** 100%, Max-width: 520px
- **Border Radius:** 32px
- **Box Shadow:** `0 10px 40px rgba(0,0,0,.25), 0 0 0 1px rgba(255,255,255,.05)`

**B. Floating Cards (3 widgets, absolutely positioned):**

Use **Text Editor** widgets for each card. Enable **Advanced → Position: Absolute** on each.

**Float Card 1 — Human Verified** (top left of image):
- Position: Absolute, Top: 12%, Left: -12%
- Custom CSS: `selector { animation: h2h-float 4s ease-in-out infinite; }`
```html
<div style="background:rgba(255,255,255,.97);backdrop-filter:blur(8px);border-radius:14px;padding:12px 16px;box-shadow:0 10px 40px rgba(0,0,0,.14);display:flex;align-items:center;gap:10px;white-space:nowrap;">
  <span style="width:36px;height:36px;background:rgba(34,197,94,.15);border-radius:10px;display:inline-flex;align-items:center;justify-content:center;font-size:18px;">✅</span>
  <div>
    <strong style="display:block;font-family:'Poppins',sans-serif;font-size:13px;font-weight:600;color:#0F172A;">Human Verified</strong>
    <span style="font-size:11px;color:#94A3B8;">No bots, no fake profiles</span>
  </div>
</div>
```

**Float Card 2 — Real-Time Chat** (bottom right of image):
- Position: Absolute, Bottom: 18%, Right: -10%
- Custom CSS: `selector { animation: h2h-float 4s ease-in-out 1.5s infinite; }`
```html
<div style="background:rgba(255,255,255,.97);backdrop-filter:blur(8px);border-radius:14px;padding:12px 16px;box-shadow:0 10px 40px rgba(0,0,0,.14);display:flex;align-items:center;gap:10px;white-space:nowrap;">
  <span style="width:36px;height:36px;background:rgba(30,58,110,.12);border-radius:10px;display:inline-flex;align-items:center;justify-content:center;font-size:18px;">💬</span>
  <div>
    <strong style="display:block;font-family:'Poppins',sans-serif;font-size:13px;font-weight:600;color:#0F172A;">Real-Time Chat</strong>
    <span style="font-size:11px;color:#94A3B8;">Message & video call instantly</span>
  </div>
</div>
```

**Float Card 3 — $0 Forever** (bottom left of image):
- Position: Absolute, Bottom: 36%, Left: -14%
- Custom CSS: `selector { animation: h2h-float 4s ease-in-out 0.75s infinite; }`
```html
<div style="background:rgba(255,255,255,.97);backdrop-filter:blur(8px);border-radius:14px;padding:12px 16px;box-shadow:0 10px 40px rgba(0,0,0,.14);display:flex;align-items:center;gap:10px;white-space:nowrap;">
  <span style="width:36px;height:36px;background:rgba(232,83,106,.12);border-radius:10px;display:inline-flex;align-items:center;justify-content:center;font-size:18px;">🚫</span>
  <div>
    <strong style="display:block;font-family:'Poppins',sans-serif;font-size:13px;font-weight:600;color:#0F172A;">$0 Forever</strong>
    <span style="font-size:11px;color:#94A3B8;">No hidden fees, ever</span>
  </div>
</div>
```

### 6. Stats Strip (attach below hero in same page)

After the hero container, add a new Container:
- **Background:** `#1E3A6E` (Global Color: Primary)
- **Padding:** 28px 0
- Width: 100%

Inside, add inner container (max-width 1200px, auto margin, padding 0 24px):
- Layout: Flex, Row, Justify: Space Between

Add 4 **Text Editor** widgets:
```html
<!-- Stat 1 -->
<div style="text-align:center;">
  <div style="font-family:'Poppins',sans-serif;font-size:38px;font-weight:800;color:#fff;line-height:1;">
    2,<span style="color:#F59E0B;">400</span>+
  </div>
  <div style="font-size:13px;font-weight:500;color:rgba(255,255,255,.65);margin-top:4px;">Active Members</div>
</div>
<!-- Stat 2 -->
<div style="text-align:center;">
  <div style="font-family:'Poppins',sans-serif;font-size:38px;font-weight:800;color:#fff;line-height:1;">
    100<span style="color:#F59E0B;">%</span>
  </div>
  <div style="font-size:13px;font-weight:500;color:rgba(255,255,255,.65);margin-top:4px;">Verified Profiles</div>
</div>
<!-- Stat 3 -->
<div style="text-align:center;">
  <div style="font-family:'Poppins',sans-serif;font-size:38px;font-weight:800;color:#fff;line-height:1;">
    180<span style="color:#F59E0B;">+</span>
  </div>
  <div style="font-size:13px;font-weight:500;color:rgba(255,255,255,.65);margin-top:4px;">Success Stories</div>
</div>
<!-- Stat 4 -->
<div style="text-align:center;">
  <div style="font-family:'Poppins',sans-serif;font-size:38px;font-weight:800;color:#fff;line-height:1;">
    <span style="color:#F59E0B;">$</span>0
  </div>
  <div style="font-size:13px;font-weight:500;color:rgba(255,255,255,.65);margin-top:4px;">Charged to Any Member</div>
</div>
```

### 7. Motion Effects

**Hero copy container:**
- Motion Effects → Entrance Animation → Fade In Left
- Duration: 700ms

**Hero visual container:**
- Motion Effects → Entrance Animation → Fade In Right
- Duration: 700ms, Delay: 200ms

**Stats strip — each stat widget:**
- Motion Effects → Entrance Animation → Fade In Up
- Duration: 500ms, Delay: 100ms (stagger each: 0ms, 100ms, 200ms, 300ms)

### 8. Responsive Adjustments

**Tablet (1024px):**
- Inner container: Direction → Column
- Hero copy: max-width 100%, text-align center
- CTA row: justify-content center
- Badges row: justify-content center
- Hero visual: set display none (or width 100%, max-width 400px)
- Padding: 60px 0

**Mobile (767px):**
- H1 font-size: 36px
- Subheadline: 16px
- CTA buttons: width 100%, justify-content center
- Stats grid: 2 columns (2x2) — wrap the stats flex container
- Float cards: hide all 3 (display none)
- Hero section min-height: auto

---

## Hero Image Specification

**File:** `hero-couple-1.webp`
**Dimensions:** 800 × 1000px
**Aspect ratio:** 4:5 portrait
**Style:** Authentic warm couple, US-based, diverse, candid/natural feeling
**Avoid:** Heavy studio lighting, stock-photo poses, overly glamorous
**Treatment:** Slightly warm color grade, soft background, bright smiles
**Alt text:** `A happy couple smiling together — real H2H Dating success story`
