# MaryFlux Starter Kit

### Laravel 12 + Livewire 4 + FluxUI + Mary UI

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Livewire](https://img.shields.io/badge/Livewire-4-blue)
![FluxUI](https://img.shields.io/badge/UI-FluxUI-purple)
![MaryUI](https://img.shields.io/badge/Components-MaryUI-green)
![License](https://img.shields.io/badge/license-MIT-lightgrey)

A **modern Laravel starter kit** combining **FluxUI** for layout and
theming with **Mary UI** for rich UI components, powered by **Livewire
4** for reactive backend‑driven interfaces.

This stack is designed for **rapid development of administrative
systems, dashboards, and data‑driven applications** using Laravel's
backend-first architecture.

------------------------------------------------------------------------

# Overview

**MaryFlux** merges two complementary UI layers:

  Layer               Technology    Role
  ------------------- ------------- ---------------------------------------
  Framework           Laravel 12    Core backend framework
  Reactive Engine     Livewire 4    Server-driven UI updates
  Layout System       FluxUI        Application shell, navigation, themes
  Component Library   Mary UI       UI components (forms, tables, modals)
  Styling             TailwindCSS   Utility-first styling
  Build Tool          Vite          Asset bundling and HMR

This structure keeps the **layout system and UI components separated**,
resulting in cleaner and more maintainable applications.

------------------------------------------------------------------------

# Architecture

    Application
       │
       ├── FluxUI (Layout / Navigation / Theme)
       │
       └── Livewire Pages
              │
              └── Mary UI Components
                     │
                     └── Backend Logic (Laravel)

**FluxUI** handles the global structure.

**Mary UI** handles reusable UI components.

**Livewire** manages interactivity and data flow.

------------------------------------------------------------------------

# Key Features

-   Laravel 12 optimized structure
-   Livewire 4 reactive components
-   FluxUI application layout system
-   Mary UI component library
-   TailwindCSS styling
-   Dark / Light theme support
-   Minimal JavaScript footprint
-   Backend‑driven UI architecture
-   Ideal for CRUD-heavy systems

------------------------------------------------------------------------

# Screenshots

*(Add screenshots here once your UI is ready)*

    /docs/screenshots/dashboard.png
    /docs/screenshots/table.png
    /docs/screenshots/forms.png

------------------------------------------------------------------------

# Installation

## 1. Clone the repository

``` bash
git clone https://github.com/your-repo/maryflux-starter.git
cd maryflux-starter
```

## 2. Install dependencies

``` bash
composer install
npm install
```

## 3. Configure environment

``` bash
cp .env.example .env
php artisan key:generate
```

## 4. Run migrations

``` bash
php artisan migrate
```

## 5. Start development servers

``` bash
php artisan serve
npm run dev
```

------------------------------------------------------------------------

# Directory Structure

    app/
     ├── Livewire/
     │   ├── Pages/
     │   └── Components/
     │
    resources/
     ├── views/
     │   ├── flux/          # FluxUI layouts
     │   ├── livewire/      # Livewire component views
     │   └── components/    # Blade components
     │
     ├── css/
     └── js/

------------------------------------------------------------------------

# Example Usage

## Livewire Component

``` php
namespace App\Livewire;

use Livewire\Component;

class UsersTable extends Component
{
    public function render()
    {
        return view('livewire.users-table');
    }
}
```

## Blade View

``` blade
<x-mary-card title="Users">
    <x-mary-table :headers="$headers" :rows="$users" />
</x-mary-card>
```

------------------------------------------------------------------------

# Theming

FluxUI controls global themes.

Example DaisyUI configuration:

``` css
@plugin "daisyui" {
    themes: dark --default, light --prefersdark;
}
```

Mary UI components automatically inherit theme styles.

------------------------------------------------------------------------

# Development Guidelines

Recommended approach:

1.  Use **FluxUI for layout**
2.  Use **Mary UI for UI components**
3.  Use **Livewire for application logic**
4.  Keep Blade views declarative
5.  Avoid mixing layout logic inside components

------------------------------------------------------------------------

# Use Cases

MaryFlux is suitable for:

-   Admin dashboards
-   Internal enterprise systems
-   Information management systems
-   Reporting platforms
-   Data entry systems
-   Government / institutional apps
-   CRUD-heavy applications

------------------------------------------------------------------------

# Workflow

Typical development process:

1.  Create a **Livewire page**
2.  Apply **FluxUI layout**
3.  Build UI using **Mary UI components**
4.  Implement logic inside **Livewire**
5.  Style with **TailwindCSS**

------------------------------------------------------------------------

# Roadmap

Possible future improvements:

-   Prebuilt admin dashboard
-   Authentication scaffolding
-   Role / permission integration
-   Data table utilities
-   Form generator helpers

------------------------------------------------------------------------

# License

This project follows the **MIT License**, the same as the Laravel
framework.

------------------------------------------------------------------------

# Credits

-   Laravel
-   Livewire
-   FluxUI
-   Mary UI
-   TailwindCSS
