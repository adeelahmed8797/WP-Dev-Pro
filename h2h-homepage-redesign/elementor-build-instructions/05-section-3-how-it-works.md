# Step 5 — Section 3: "How It Works" (h2h-section-3-how-it-works)

**Where to build:** Below Section 2 on the homepage

**Section ID to set:** `how-it-works`

---

## Overview

White-background section with a section header and a 3-column horizontal step layout.
Steps connected by a thin gradient line. Each step: numbered bubble icon → step title → description.
Ends with an "invite-only" callout note.

---

## Container Structure

```
Container: section-how (full-width, bg #FFFFFF)
  └── Container: how-inner (max-width 1200px)
        ├── Container: section-header (centered)
        │     ├── Widget: Text (eyebrow — rose style)
        │     ├── Widget: Heading (H2)
        │     └── Widget: Text (lead)
        ├── Container: steps-wrapper (relative, for connector line)
        │     ├── Widget: Text (connector line — absolutely positioned)
        │     ├── Container: step-1
        │     │     ├── Widget: Text (bubble + number)
        │     │     ├── Widget: Heading (H3)
        │     │     └── Widget: Text (description)
        │     ├── Container: step-2
        │     └── Container: step-3
        └── Widget: Text (invite-only note)
```

---

## Step-by-Step Build

### 1. Section Root Container

- **CSS ID:** `how-it-works`
- **Background:** `#FFFFFF`
- **Padding:** 120px 0 (desktop), 80px 0 (tablet), 64px 0 (mobile)
- **Width:** 100%

### 2. Inner Container

- **Max-width:** 1200px, Width: 100%, Margin: 0 auto, Padding: 0 24px
- **Layout:** Flex, Column, Gap: 60px

### 3. Section Header

Max-width: 640px, centered (margin: 0 auto), text-align center.

**A. Eyebrow chip — rose style:**
```html
<span style="
  display:inline-flex; align-items:center; gap:6px;
  background:rgba(232,83,106,.10); color:#E8536A;
  font-family:'Poppins',sans-serif; font-size:12px; font-weight:600;
  letter-spacing:.08em; text-transform:uppercase;
  padding:6px 14px; border-radius:100px;
">
  Get Started in Minutes
</span>
```

**B. H2:**
- Text: `How It Works`
- Typography: Poppins 700, 44px → 28px mobile
- Color: `#0F172A`, Letter-spacing: -0.02em

**C. Lead:**
- Text: `Three simple steps. No credit card. No biometric scans. No algorithms.`
- Typography: Inter 400, 19px → 16px mobile, line-height 1.7, color `#475569`

### 4. Steps Wrapper Container

Add a Container below the section header:
- **Layout:** Flex, Row, Align: Flex Start, Gap: 0
- **Position:** Relative (Custom CSS: `selector { position: relative; }`)
- **Width:** 100%

**Connector Line — Text Editor widget (absolutely positioned):**
- CSS Class: (none needed — use inline styles)
- Position: Absolute (Advanced → Position)
- Top: 48px, Left: ~17%, Right: ~17%
- Custom CSS on this widget:
  ```css
  selector {
    position: absolute;
    top: 48px;
    left: 16.6%;
    right: 16.6%;
    height: 2px;
    background: linear-gradient(90deg, #1E3A6E 0%, #E8536A 50%, #F59E0B 100%);
    z-index: 0;
  }
  selector::before, selector::after {
    content: '';
    position: absolute;
    top: 50%; transform: translateY(-50%);
    width: 10px; height: 10px;
    border-radius: 50%;
    background: #E8536A;
  }
  selector::before { left: 33.33%; }
  selector::after  { left: 66.66%; }
  ```
- Widget content: leave empty (space character)

> **Mobile:** Set this connector line to `display: none` at 767px breakpoint.

### 5. Step Containers (3 equal columns)

Add 3 child Containers inside steps-wrapper:
- Each: **Flex Basis:** 33.33%, Flex Grow: 1
- **Layout:** Flex, Column, Align: Center
- **Text-align:** Center
- **Padding:** 0 32px
- **Z-index:** 1

**Per step, add these widgets:**

**A. Step Bubble + Number — Text Editor:**

```html
<!-- Step 1 -->
<div style="position:relative; width:96px; height:96px; margin:0 auto 28px;">
  <div style="width:96px;height:96px;border-radius:50%;background:linear-gradient(135deg,#1E3A6E,#2B52A0);display:flex;align-items:center;justify-content:center;font-size:36px;box-shadow:0 0 0 6px rgba(30,58,110,.08);">📝</div>
  <span style="position:absolute;top:-6px;right:-6px;width:28px;height:28px;background:#fff;border:2px solid #E2E8F0;border-radius:50%;font-family:'Poppins',sans-serif;font-size:12px;font-weight:700;color:#0F172A;display:inline-flex;align-items:center;justify-content:center;">1</span>
</div>

<!-- Step 2 -->
<div style="position:relative; width:96px; height:96px; margin:0 auto 28px;">
  <div style="width:96px;height:96px;border-radius:50%;background:linear-gradient(135deg,#E8536A,#F27A8E);display:flex;align-items:center;justify-content:center;font-size:36px;box-shadow:0 0 0 6px rgba(232,83,106,.08);">🧑‍💼</div>
  <span style="position:absolute;top:-6px;right:-6px;width:28px;height:28px;background:#fff;border:2px solid #E2E8F0;border-radius:50%;font-family:'Poppins',sans-serif;font-size:12px;font-weight:700;color:#0F172A;display:inline-flex;align-items:center;justify-content:center;">2</span>
</div>

<!-- Step 3 -->
<div style="position:relative; width:96px; height:96px; margin:0 auto 28px;">
  <div style="width:96px;height:96px;border-radius:50%;background:linear-gradient(135deg,#F59E0B,#FCD34D);display:flex;align-items:center;justify-content:center;font-size:36px;box-shadow:0 0 0 6px rgba(245,158,11,.08);">💞</div>
  <span style="position:absolute;top:-6px;right:-6px;width:28px;height:28px;background:#fff;border:2px solid #E2E8F0;border-radius:50%;font-family:'Poppins',sans-serif;font-size:12px;font-weight:700;color:#0F172A;display:inline-flex;align-items:center;justify-content:center;">3</span>
</div>
```

**B. H3 Heading widget:**

| Step | Heading                          |
|------|----------------------------------|
| 1    | Sign Up Free                     |
| 2    | Get Verified by a Real Human     |
| 3    | Connect & Video Call             |

- Typography: Poppins 700, 20px, color `#0F172A`
- Margin-bottom: 12px

**C. Description — Text Editor:**

| Step | Description |
|------|-------------|
| 1    | Create your profile in minutes. No subscription, no credit card, no hidden steps. Just you. |
| 2    | A real person on our team reviews your profile — no AI, no biometrics — to confirm you're genuine. |
| 3    | Browse freely, message anyone, and jump on a video call — all within the platform, all free. |

- Typography: Inter 400, 15px, line-height 1.65, color `#475569`
- Max-width: 260px, Margin: 0 auto

### 6. Invite-Only Callout Note

Add a **Text Editor** widget below the steps wrapper:
```html
<div style="
  text-align:center; margin: 56px auto 0;
  padding:20px 32px;
  background:rgba(30,58,110,.05);
  border:1px solid rgba(30,58,110,.10);
  border-radius:14px;
  max-width:640px;
">
  <p style="font-family:'Inter',sans-serif;font-size:15px;color:#475569;line-height:1.65;">
    <strong style="color:#1E3A6E;">Invite-only community</strong> — H2H Dating grows through genuine word-of-mouth.
    We keep the community small and quality-focused so every member gets real attention.
    <a href="/register/" style="color:#1E3A6E;font-weight:600;text-decoration:none;">Request your invite →</a>
  </p>
</div>
```

### 7. Motion Effects

**Section header:** Fade In Up, 600ms
**Step 1 bubble:** Zoom In, 500ms, 0ms delay
**Step 2 bubble:** Zoom In, 500ms, 200ms delay
**Step 3 bubble:** Zoom In, 500ms, 400ms delay
**Step titles/descriptions:** Fade In Up, 500ms (per step, staggered by 150ms)
**Callout note:** Fade In Up, 600ms

### 8. Responsive Adjustments

**Tablet (1024px):**
- Steps wrapper: Direction → Column
- Connector line: display none
- Each step: flex-basis 100%, max-width 400px, margin 0 auto
- Step descriptions: max-width 100%

**Mobile (767px):**
- Padding: 64px 0
- H2: 28px
- Steps: 1 column, centered, gap 48px between steps
- Step padding: 0 16px
