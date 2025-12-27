<x-guest-layout>

    <style>
        /* Override layout Breeze */
        .min-h-screen.bg-gray-100 {
            min-height: 100vh;
            padding: 0 !important;
            margin: 0 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                radial-gradient(circle at top, #1e293b 0, #020617 40%, #020617 100%);
        }

        /* sembunyiin logo laravel di atas */
        .min-h-screen.bg-gray-100 > div:first-child {
            display: none;
        }

        /* container card bawaan breeze jadi transparan full width */
        .min-h-screen.bg-gray-100 > div:nth-child(2) {
            width: 100%;
            max-width: none;
            background: transparent !important;
            box-shadow: none !important;
            padding: 0 !important;
            margin: 0 !important;
            overflow: visible !important;
        }

        /* --- Glass page & card --- */

        .glass-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            position: relative;
            overflow: hidden;
        }

        .glass-page::before,
        .glass-page::after {
            content: "";
            position: absolute;
            border-radius: 999px;
            filter: blur(40px);
            opacity: 0.6;
            pointer-events: none;
        }

        .glass-page::before {
            width: 420px;
            height: 420px;
            top: -120px;
            right: -80px;
            background: radial-gradient(circle at center, #22c55e, transparent 70%);
        }

        .glass-page::after {
            width: 360px;
            height: 360px;
            bottom: -120px;
            left: -60px;
            background: radial-gradient(circle at center, #0ea5e9, transparent 70%);
        }

        .glass-card {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 420px;
            padding: 32px 30px 30px;
            border-radius: 26px;
            border: 1px solid rgba(148, 163, 184, 0.7);
            background:
                linear-gradient(135deg, rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.7)),
                radial-gradient(circle at top, rgba(56, 189, 248, 0.24), transparent 60%);
            background-blend-mode: overlay;
            box-shadow:
                0 24px 80px rgba(15, 23, 42, 0.95),
                0 0 0 1px rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(24px);
            color: #e5e7eb;
        }

        .glass-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .glass-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 4px 10px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.5);
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9), rgba(30, 64, 175, 0.65));
            font-size: 11px;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: #cbd5f5;
        }

        .glass-logo-dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: #22c55e;
            box-shadow: 0 0 10px rgba(34, 197, 94, 0.9);
        }

        .glass-tabs {
            display: flex;
            align-items: center;
            gap: 16px;
            font-size: 12px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }

        .glass-tab-active {
            color: #e5e7eb;
            position: relative;
        }

        .glass-tab-active::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 22px;
            height: 2px;
            border-radius: 999px;
            background: linear-gradient(90deg, #22c55e, #0ea5e9);
            box-shadow: 0 0 10px rgba(34, 197, 94, 0.9);
        }

        .glass-tab-inactive {
            color: #64748b;
        }

        .glass-title {
            font-size: 26px;
            line-height: 1.3;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .glass-subtitle {
            font-size: 11px;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: #9ca3af;
            margin-bottom: 18px;
        }

        .glass-icon-circle {
            width: 40px;
            height: 40px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.65);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #e5e7eb;
            margin-bottom: 22px;
            background: radial-gradient(circle at top, rgba(56, 189, 248, 0.35), rgba(15, 23, 42, 0.95));
            box-shadow:
                0 10px 30px rgba(15, 23, 42, 0.9),
                0 0 16px rgba(56, 189, 248, 0.8);
        }

        .glass-label {
            font-size: 11px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #94a3b8;
            margin-bottom: 6px;
        }

        .glass-input-wrap {
            position: relative;
            margin-bottom: 18px;
        }

        .glass-input {
            width: 100%;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.8);
            background: radial-gradient(circle at top left, rgba(30, 64, 175, 0.5), rgba(15, 23, 42, 0.95));
            padding: 11px 14px;
            padding-right: 40px;
            font-size: 13px;
            color: #e5e7eb;
            outline: none;
        }

        .glass-input::placeholder {
            color: #64748b;
        }

        .glass-input:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 1px rgba(34, 197, 94, 0.9);
        }

        .glass-input-icon {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 13px;
            color: #64748b;
        }

        .glass-button {
            margin-top: 22px;
            width: 100%;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.9);
            padding: 11px;
            font-size: 12px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background:
                radial-gradient(circle at top, rgba(56, 189, 248, 0.35), rgba(15, 23, 42, 1));
            color: #e5f4ff;
            box-shadow:
                0 18px 40px rgba(59, 130, 246, 0.75),
                0 0 18px rgba(56, 189, 248, 0.8);
            cursor: pointer;
            transition: transform 0.12s ease, box-shadow 0.12s ease, background 0.12s ease;
        }

        .glass-button:hover {
            transform: translateY(-1px);
            box-shadow:
                0 24px 60px rgba(59, 130, 246, 0.9),
                0 0 22px rgba(56, 189, 248, 0.9);
        }

        .glass-footer {
            margin-top: 18px;
            font-size: 11px;
            color: #94a3b8;
            text-align: center;
        }

        .glass-footer a {
            color: #cbd5f5;
        }

        .glass-footer a:hover {
            color: #e5e7eb;
        }

        .input-error {
            margin-top: 4px;
            font-size: 11px;
            color: #fca5a5;
        }
    </style>

    <div class="glass-page">
        <div class="glass-card">
            <div class="glass-card-header">
                <div class="glass-pill">
                    <span class="glass-logo-dot"></span>
                    <span>Password Reset</span>
                </div>
                <div class="glass-tabs">
                    <a href="{{ route('login') }}" class="glass-tab-inactive">Login</a>
                    <a href="{{ route('register') }}" class="glass-tab-inactive">Register</a>
                    <span class="glass-tab-active">Reset</span>
                </div>
            </div>

            <div class="glass-title">Forgot</div>
            <div class="glass-subtitle">We’ll email you a reset link</div>

            <div class="glass-icon-circle">
                🔑
            </div>

            <div style="font-size: 11px; color:#9ca3af; margin-bottom: 16px; line-height: 1.5;">
                Enter the email associated with your account and we’ll send you a link
                to reset your password.
            </div>

            <!-- Status (link sent) -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                {{-- Email --}}
                <div class="glass-input-group">
                    <div class="glass-label">Email</div>
                    <div class="glass-input-wrap">
                        <input
                            id="email"
                            type="email"
                            name="email"
                            class="glass-input"
                            value="{{ old('email') }}"
                            required
                            autofocus
                        >
                        <span class="glass-input-icon">@</span>
                    </div>
                    @if ($errors->has('email'))
                        <p class="input-error">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <button type="submit" class="glass-button">
                    <span>Send link</span>
                    <span>→</span>
                </button>

                <div class="glass-footer">
                    Remember your password?
                    <a href="{{ route('login') }}">Back to login</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
s