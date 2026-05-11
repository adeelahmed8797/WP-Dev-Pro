# Step 4 — Section 2: "What Makes Us Different" Feature Grid (h2h-section-2-features)

**Where to build:** Below the stats strip on the homepage

**Section ID to set:** `why-us` (Elementor → Advanced → CSS ID → `why-us`)

---

## Overview

A light-background section with a centered section header and a 4-column card grid.
Each card has an icon background, H3 heading, and 2-line description.
Hover: card lifts + a gradient top bar animates in.

---

## Container Structure

```
Container: section-features (full-width, bg #F7F8FC)
  └── Container: features-inner (max-width 1200px)
        ├── Container: section-header (max-width 640px, centered)
        │     ├── Widget: Text (eyebrow label chip)
        │     ├── Widget: Heading (H2)
        │     └── Widget: Text (lead paragraph)
        └── Container: features-grid (flex row, 4 cols)
              ├── Container: feature-card-1  (No Paywalls)
              ├── Container: feature-card-2  (No ELO Scores)
              ├── Container: feature-card-3  (Video Calling)
              └── Container: feature-card-4  (Biometric-Free)
```

---

## Step-by-Step Build

### 1. Section Root Container

Add a new full-width Container below the stats strip:
- **CSS ID:** `why-us`
- **Background:** `#F7F8FC` (Global Color: BG Section)
- **Padding:** 120px 0 (desktop), 80px 0 (tablet), 64px 0 (mobile)
- **Width:** 100%

### 2. Inner Container (max-width wrapper)

Inside root, add Container:
- **Max-width:** 1200px, Width: 100%, Margin: 0 auto, Padding: 0 24px
- **Layout:** Flex, Column, Gap: 60px

### 3. Section Header

Add a Container inside the inner container:
- **Max-width:** 640px, Margin: 0 auto, Text-align: Center
- **Layout:** Flex, Column, Align: Center, Gap: 16px

**A. Eyebrow chip — Text Editor:**
```html
<span style="
  display:inline-flex; align-items:center; gap:6px;
  background:rgba(30,58,110,.08); color:#1E3A6E;
  font-family:'Poppins',sans-serif; font-size:12px; font-weight:600;
  letter-spacing:.08em; text-transform:uppercase;
  padding:6px 14px; border-radius:100px;
">
  Why H2H Dating
</span>
```

**B. H2 Heading widget:**
- Text: `What Makes Us Different`
- Tag: H2
- Typography: Poppins 700, 44px desktop / 32px tablet / 28px mobile
- Color: `#0F172A`
- Letter spacing: -0.02em
- "Different" can be gradient: wrap in a Text Editor with inline span:
  ```html
  <h2 style="font-family:'Poppins',sans-serif;font-size:44px;font-weight:700;letter-spacing:-0.02em;color:#0F172A;line-height:1.2;">
    What Makes Us <span style="background:linear-gradient(135deg,#E8536A 0%,#F59E0B 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Different</span>
  </h2>
  ```

**C. Lead text — Text Editor:**
- Content: `Built on radical transparency. Every feature exists to serve you — not to extract money from you.`
- Typography: Inter 400, 19px / 16px mobile, line-height 1.7
- Color: `#475569`

### 4. Features Grid Container

Add a Container inside the inner container:
- **Layout:** Flex, Row, Wrap, Gap: 24px
- **Align Items:** Stretch (so all cards equal height)

Add 4 child Containers (one per card):
- Each: **Flex Basis:** calc(25% - 18px), Flex Grow: 1, Flex Shrink: 1
- On tablet (1024px): Flex Basis: calc(50% - 12px)
- On mobile (767px): Flex Basis: 100%

### 5. Individual Feature Card

Repeat this build for all 4 cards. Apply **CSS Class:** `h2h-feature-card` to each card container.

**Card Container settings:**
- **Background:** `#FFFFFF`
- **Border:** 1px solid `#E2E8F0`
- **Border Radius:** 20px
- **Box Shadow:** `0 2px 12px rgba(30,58,110,.08)`
- **Padding:** 32px 28px
- **Layout:** Flex, Column, Gap: 0, Align: Flex Start
- **Overflow:** Hidden
- **Position:** Relative

The hover top-bar and lift are handled by `.h2h-feature-card` CSS from the Global Custom CSS (Step 0). No additional per-card CSS needed.

**Inside each card, add:**

**A. Icon background block — Text Editor:**
```html
<!-- Card 1: No Paywalls -->
<div style="width:56px;height:56px;background:rgba(30,58,110,.10);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:26px;margin-bottom:20px;">🚫💰</div>
<!-- Card 2: No ELO -->
<div style="width:56px;height:56px;background:rgba(232,83,106,.10);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:26px;margin-bottom:20px;">🎯</div>
<!-- Card 3: Video Calling -->
<div style="width:56px;height:56px;background:rgba(245,158,11,.10);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:26px;margin-bottom:20px;">📹</div>
<!-- Card 4: Biometric-Free -->
<div style="width:56px;height:56px;background:rgba(34,197,94,.10);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:26px;margin-bottom:20px;">🛡️</div>
```

**B. H3 Heading widget:**

| Card | Heading text                        |
|------|-------------------------------------|
| 1    | No Paywalls. Ever.                  |
| 2    | No ELO Scores or Algorithms         |
| 3    | Video Calling & Real-Time Chat      |
| 4    | Biometric-Free Human Verification   |

- Typography: Poppins 700, 18px, line-height 1.3
- Color: `#0F172A`
- Margin-bottom: 10px

**C. Description — Text Editor:**

| Card | Description text |
|------|-----------------|
| 1    | Browse profiles, send messages, see who liked you, boost your profile — all free. We don't believe in charging people to find love. |
| 2    | We don't rank you or hide you from others. Every member gets equal visibility. You choose who to connect with — not a black-box AI. |
| 3    | Go from message to video call without leaving the platform. Built-in, free, no third-party app needed. Real chemistry requires real conversation. |
| 4    | Our trained human reviewers verify every member — no facial recognition required. This keeps out romance scammers and pig-butchering fraudsters. |

- Typography: Inter 400, 14px, line-height 1.65
- Color: `#475569`

### 6. Motion Effects

**Section header:**
- Entrance: Fade In Up, 600ms, 0ms delay

**Feature cards (each):**
- Entrance: Fade In Up, 600ms
- Delays: Card1=0ms, Card2=100ms, Card3=200ms, Card4=300ms

### 7. Responsive Adjustments

**Tablet (1024px):**
- Cards grid: 2 columns (each card flex-basis: calc(50% - 12px))
- Section padding: 80px 0

**Mobile (767px):**
- Cards grid: 1 column (each card flex-basis: 100%)
- Section padding: 64px 0
- H2 font-size: 28px

---

## Section Image Specification

**File:** `section-2-features-bg.webp` (optional background texture)
**Use:** Subtle paper/linen texture overlay at 5% opacity to add depth
**Dimensions:** 1920 × 200px
**Alternative:** Leave as solid `#F7F8FC` — works great without texture
