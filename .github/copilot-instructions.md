# SafetyManagementSystem - AI Coding Agent Instructions

## Project Overview
Safety Management System (Sistem Manajemen K3 - Kesehatan & Keselamatan Kerja) is a Laravel 12 application for managing workplace safety documentation at PT Pentol Ball. The system handles three primary document workflows: **invitations** (undangan), **safety talks** (safety talks), and **documentation** (dokumentasi).

## Architecture & Key Patterns

### Core Data Model
- **Users**: Basic auth system with `name`, `email`, `password`
- **Invitations**: Generated PDFs sent to users. Model: `Invitation` → belongs to `User`, has many `Dokumentasi`
- **Dokumentasi**: Evidence/documentation files attached to invitations (e.g., photos, PDFs)
- **SafetyTalk**: Records of safety talk events (not yet fully integrated)

**Key relationship**: `User` → `Invitation` → `Dokumentasi` (1-to-many to many cascade)

### Data Flow
1. **PdfController** generates invitation PDFs for all users via `sendInvitation()` 
   - Saves to `storage/app/public/bukti/undangan_*.pdf`
   - Creates/updates `Invitation` records with `user_id`, `file_path`, `topik`, `tanggal`, `jam`
2. **DokumentasiController** handles evidence uploads
   - Accepts: JPG, PNG, PDF (max 2MB)
   - Stores to `storage/app/public/dokumentasi/`
   - Links to `Invitation` via `invitation_id`

### Routes Organization
- **Dynamic routes**: PDF generation, documentation CRUD → controllers
- **Static routes**: `resources/views/` pages (welcome, manajemenRisk, penerapank3, etc.)
- All static pages are rendered directly from route closures; no model logic needed

### File Storage Pattern
```
storage/
  app/public/
    bukti/          # Generated invitation PDFs (user-facing)
    dokumentasi/    # Uploaded evidence files
```

## Development Workflow

### Setup Commands
```bash
composer install                    # Install PHP dependencies
npm install                        # Install Node packages
php artisan migrate               # Run database migrations
```

### Build & Development
- **Frontend**: Vite with Tailwind CSS
  ```bash
  npm run dev      # Dev server with hot reload
  npm run build    # Production build
  ```
- **Backend**: Laravel uses `artisan` commands
  ```bash
  php artisan tinker              # REPL for debugging
  php artisan migrate             # Run pending migrations
  php artisan db:seed             # Populate seeder data
  ```

### Testing
```bash
php artisan test                  # Run feature/unit tests
```

## Coding Conventions

### Blade Templates
- Stored in `resources/views/` with `.blade.php` extension
- Routes reference views directly: `view('manajemenRisk')` maps to `manajemenRisk.blade.php`
- Static pages embed full HTML+CSS (e.g., welcome.blade.php is 1500+ lines)
- Use `route()` helper for named routes: `route('dokumentasi.create', ['invitationId' => $id])`

### Controllers
- Located in `app/Http/Controllers/`
- Validation: `$request->validate()` inline (no separate Form Requests yet)
- File uploads use Laravel's `Storage::` facade for consistent paths
- Always use `Invitation::findOrFail()` for 404 handling

### Models
- Use `$fillable` properties (no `$guarded`)
- Relations use Eloquent conventions: `belongsTo()`, `hasMany()`
- Store file paths as strings, manage actual files via `Storage::`

### Naming Conventions
- Indonesian terms mixed with English: `judul` (title), `tanggal` (date), `bukti` (evidence)
- Database column naming: snake_case (`invitation_id`, `file_path`, `topik`)
- Route names use dot notation: `dokumentasi.create`, `undangan.list`, `dokumentasi.download`

## PDF Generation
- Uses **barryvdh/laravel-dompdf** (`^3.1`)
- Registered in `config/app.php` aliases: `'Pdf' => Barryvdh\DomPDF\Facade\Pdf::class`
- Pattern: `Pdf::loadView('suratUndangan', $data)->save($fullPath)`
- Views used for PDFs: `suratUndangan.blade.php`
- Always create storage directories before save: `Storage::makeDirectory('public/bukti')`

## Common Tasks

### Adding a New Document Type
1. Create migration in `database/migrations/` (use timestamp prefix)
2. Create Model in `app/Models/` with `$fillable` properties
3. Add Controller with CRUD methods in `app/Http/Controllers/`
4. Define routes in `routes/web.php` with named routes
5. Create Blade views in `resources/views/{document_type}/`

### Uploading Files
- Always validate MIME types: `'mimes:jpg,jpeg,png,pdf'`
- Use `$request->file('fieldname')->store('path/relative/to/storage/app')`
- Store path in database, files in `storage/app/`
- Download via controller: `response()->download(storage_path('app/'.$path))`

### Generating PDFs
- Prepare data array with user info
- Call `Pdf::loadView('template_name', $data)->save($fullPath)`
- Save path to database for later retrieval
- Use `Storage::makeDirectory()` to ensure directory exists

## Integration Points & Dependencies
- **Eloquent ORM**: All data access (no raw SQL patterns)
- **Blade templating**: Server-side rendering only (no API/SPA)
- **Tailwind CSS + Vite**: Frontend styling and bundling
- **DomPDF**: PDF generation via `barryvdh/laravel-dompdf`
- **Faker**: Test data generation in seeders
- **PHPUnit**: Testing framework

## Database Migrations
- Location: `database/migrations/`
- Naming: `YYYY_MM_DD_HHMMSS_snake_case_description.php`
- Example: `2025_12_09_133416_create_invitations_table.php`
- Always use `foreignId('user_id')->constrained()->cascadeOnDelete()` for foreign keys

## Tips for AI Agents
1. **Check migrations first** when adding fields—schema is the source of truth
2. **Use Storage facade** for all file operations; never use raw file paths in code
3. **Validate before storing**—all file uploads must validate MIME types and size
4. **Test with `php artisan tinker`** for quick model/relationship verification
5. **Indonesian is mixed throughout**—expect Indonesian column names, route descriptions, and view content
6. **Cascade delete is configured**—deleting an Invitation cascades to all Dokumentasi; account for this in logic
