<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="p-6 space-y-10">

    {{-- STATS --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Stats</h2>
        <div class="stats shadow">
            <div class="stat">
                <div class="stat-figure text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="stat-title">Total Users</div>
                <div class="stat-value">31,000</div>
                <div class="stat-desc">21% more than last month</div>
            </div>
            <div class="stat">
                <div class="stat-figure text-secondary">
                    <div class="avatar online">
                        <div class="w-16 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </div>
                <div class="stat-value">86%</div>
                <div class="stat-title">Tasks done</div>
                <div class="stat-desc text-secondary">31 tasks remaining</div>
            </div>
        </div>
    </section>

    {{-- BUTTONS --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Buttons</h2>
        <div class="flex flex-wrap gap-2">
            <button class="btn">Default</button>
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-secondary">Secondary</button>
            <button class="btn btn-accent">Accent</button>
            <button class="btn btn-info">Info</button>
            <button class="btn btn-success">Success</button>
            <button class="btn btn-warning">Warning</button>
            <button class="btn btn-error">Error</button>
            <button class="btn btn-ghost">Ghost</button>
            <button class="btn btn-link">Link</button>
            <button class="btn btn-outline">Outline</button>
            <button class="btn btn-sm">Small</button>
            <button class="btn btn-lg">Large</button>
            <button class="btn btn-primary" disabled>Disabled</button>
            <button class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                With Icon
            </button>
            <button class="btn btn-primary loading">Loading</button>
        </div>
    </section>

    {{-- BADGES --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Badges</h2>
        <div class="flex flex-wrap gap-2">
            <span class="badge">Default</span>
            <span class="badge badge-primary">Primary</span>
            <span class="badge badge-secondary">Secondary</span>
            <span class="badge badge-accent">Accent</span>
            <span class="badge badge-info">Info</span>
            <span class="badge badge-success">Success</span>
            <span class="badge badge-warning">Warning</span>
            <span class="badge badge-error">Error</span>
            <span class="badge badge-outline">Outline</span>
            <span class="badge badge-lg badge-primary">Large</span>
            <span class="badge badge-sm badge-primary">Small</span>
        </div>
    </section>

    {{-- ALERTS --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Alerts</h2>
        <div class="space-y-2">
            <div role="alert" class="alert">
                <span>Default alert — something happened.</span>
            </div>
            <div role="alert" class="alert alert-info">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6 shrink-0 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>Info — did you know this?</span>
            </div>
            <div role="alert" class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>Success — action completed!</span>
            </div>
            <div role="alert" class="alert alert-warning">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                <span>Warning — check this out.</span>
            </div>
            <div role="alert" class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>Error — something went wrong.</span>
            </div>
        </div>
    </section>

    {{-- CARDS --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Cards</h2>
        <div class="flex flex-wrap gap-4">
            <div class="card w-72 bg-base-100 shadow-xl">
                <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Card Title
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>A basic card with image, title, badge and actions.</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card w-72 bg-primary text-primary-content shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Colored Card</h2>
                    <p>Card using primary background color.</p>
                    <div class="card-actions justify-end">
                        <button class="btn">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PROGRESS --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Progress</h2>
        <div class="space-y-2 max-w-md">
            <progress class="progress w-full" value="0" max="100"></progress>
            <progress class="progress progress-primary w-full" value="25" max="100"></progress>
            <progress class="progress progress-secondary w-full" value="50" max="100"></progress>
            <progress class="progress progress-accent w-full" value="75" max="100"></progress>
            <progress class="progress progress-success w-full" value="100" max="100"></progress>
            <progress class="progress progress-warning w-full" value="60" max="100"></progress>
            <progress class="progress progress-error w-full" value="40" max="100"></progress>
        </div>
    </section>

    {{-- TABLE --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Table</h2>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover">
                        <th>1</th>
                        <td>Juan dela Cruz</td>
                        <td>Admin</td>
                        <td><span class="badge badge-success">Active</span></td>
                    </tr>
                    <tr class="hover">
                        <th>2</th>
                        <td>Maria Santos</td>
                        <td>Editor</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                    </tr>
                    <tr class="hover">
                        <th>3</th>
                        <td>Jose Reyes</td>
                        <td>Viewer</td>
                        <td><span class="badge badge-error">Inactive</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- AVATAR --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Avatar</h2>
        <div class="flex flex-wrap gap-4 items-end">
            <div class="avatar">
                <div class="w-24 rounded-xl">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <div class="avatar">
                <div class="w-16 rounded-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <div class="avatar online">
                <div class="w-12 rounded-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <div class="avatar offline">
                <div class="w-12 rounded-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <div class="avatar placeholder">
                <div class="bg-neutral text-neutral-content w-12 rounded-full">
                    <span class="text-xl">JD</span>
                </div>
            </div>
        </div>
    </section>

    {{-- TOAST (static display only) --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Toast (position demo)</h2>
        <div class="relative h-24 border rounded-box overflow-hidden">
            <div class="toast toast-end">
                <div class="alert alert-success"><span>Message sent!</span></div>
                <div class="alert alert-error"><span>Connection failed.</span></div>
            </div>
        </div>
    </section>

    {{-- LOADING --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Loading</h2>
        <div class="flex flex-wrap gap-4 items-center">
            <span class="loading loading-spinner loading-xs"></span>
            <span class="loading loading-spinner loading-sm"></span>
            <span class="loading loading-spinner loading-md"></span>
            <span class="loading loading-spinner loading-lg"></span>
            <span class="loading loading-dots loading-md"></span>
            <span class="loading loading-ring loading-md"></span>
            <span class="loading loading-ball loading-md"></span>
            <span class="loading loading-bars loading-md"></span>
            <span class="loading loading-infinity loading-md"></span>
        </div>
    </section>

    {{-- TOOLTIP --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Tooltip</h2>
        <div class="flex flex-wrap gap-4">
            <div class="tooltip" data-tip="Default tooltip">
                <button class="btn">Hover me</button>
            </div>
            <div class="tooltip tooltip-primary" data-tip="Primary">
                <button class="btn btn-primary">Primary</button>
            </div>
            <div class="tooltip tooltip-right" data-tip="Right side">
                <button class="btn">Right</button>
            </div>
            <div class="tooltip tooltip-bottom" data-tip="Bottom">
                <button class="btn">Bottom</button>
            </div>
        </div>
    </section>

    {{-- COLLAPSE / ACCORDION --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Collapse / Accordion</h2>
        <div class="space-y-2 max-w-lg">
            <div class="collapse collapse-arrow bg-base-200">
                <input type="radio" name="accordion-1" checked />
                <div class="collapse-title font-semibold">Item 1</div>
                <div class="collapse-content text-sm">Content for item 1.</div>
            </div>
            <div class="collapse collapse-arrow bg-base-200">
                <input type="radio" name="accordion-1" />
                <div class="collapse-title font-semibold">Item 2</div>
                <div class="collapse-content text-sm">Content for item 2.</div>
            </div>
            <div class="collapse collapse-arrow bg-base-200">
                <input type="radio" name="accordion-1" />
                <div class="collapse-title font-semibold">Item 3</div>
                <div class="collapse-content text-sm">Content for item 3.</div>
            </div>
        </div>
    </section>

    {{-- STEPS --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Steps</h2>
        <ul class="steps">
            <li class="step step-primary">Register</li>
            <li class="step step-primary">Profile</li>
            <li class="step">Settings</li>
            <li class="step">Confirm</li>
        </ul>
    </section>

    {{-- COUNTDOWN --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Countdown</h2>
        <div class="flex gap-4">
            <div class="flex flex-col items-center">
                <span class="countdown font-mono text-4xl"><span style="--value:10;"></span></span>
                <span class="text-xs">days</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="countdown font-mono text-4xl"><span style="--value:24;"></span></span>
                <span class="text-xs">hours</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="countdown font-mono text-4xl"><span style="--value:35;"></span></span>
                <span class="text-xs">min</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="countdown font-mono text-4xl"><span style="--value:48;"></span></span>
                <span class="text-xs">sec</span>
            </div>
        </div>
    </section>

    {{-- SWAP --}}
    <section>
        <h2 class="text-lg font-bold mb-3">Swap</h2>
        <label class="swap swap-rotate text-4xl">
            <input type="checkbox" />
            <div class="swap-on">🌞</div>
            <div class="swap-off">🌚</div>
        </label>
    </section>

</div>