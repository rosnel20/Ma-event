<x-layouts.app :title="__('Dashboard')">
    <div style="padding: var(--space-6);">
        <div style="margin-bottom: var(--space-8);">
            <h1 style="font-size: var(--text-4xl); font-weight: var(--font-bold); color: var(--color-text-primary); margin-bottom: var(--space-2);">
                Tableau de bord
            </h1>
            <p style="color: var(--color-text-secondary); font-size: var(--text-lg);">
                Bienvenue sur votre espace personnel
            </p>
        </div>

        <!-- Stats Cards -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: var(--space-6); margin-bottom: var(--space-8);">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Messages reçus</h3>
                </div>
                <div class="card-body">
                    <div style="font-size: var(--text-4xl); font-weight: var(--font-bold); color: var(--color-primary);">
                        0
                    </div>
                    <p style="color: var(--color-text-secondary); margin: var(--space-2) 0 0;">Nouveaux messages</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Événements</h3>
                </div>
                <div class="card-body">
                    <div style="font-size: var(--text-4xl); font-weight: var(--font-bold); color: var(--color-primary);">
                        0
                    </div>
                    <p style="color: var(--color-text-secondary); margin: var(--space-2) 0 0;">Événements à venir</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Clients</h3>
                </div>
                <div class="card-body">
                    <div style="font-size: var(--text-4xl); font-weight: var(--font-bold); color: var(--color-primary);">
                        0
                    </div>
                    <p style="color: var(--color-text-secondary); margin: var(--space-2) 0 0;">Clients actifs</p>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card" style="margin-bottom: var(--space-6);">
            <div class="card-header">
                <h3 class="card-title">Activité récente</h3>
            </div>
            <div class="card-body">
                <p style="color: var(--color-text-secondary); text-align: center; padding: var(--space-8);">
                    Aucune activité récente
                </p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Actions rapides</h3>
            </div>
            <div class="card-body">
                <div style="display: flex; gap: var(--space-4); flex-wrap: wrap;">
                    <a href="#contact" class="btn btn-primary">Voir les messages</a>
                    <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Modifier le profil</a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
