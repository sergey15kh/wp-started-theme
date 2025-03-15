# 🚀 Компоненты темы WordPress (Custom Theme)

Набор готовых HTML-компонентов с JavaScript-логикой и SCSS-поддержкой. Универсальное решение для разработки тем на WordPress (2025).

---

## 🍔 Бургер-меню

```html
<!-- Кнопка -->
<button data-burger aria-label="Меню">
  <span></span>
</button>

<!-- Навигация -->
<nav data-nav>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
  </ul>
</nav>
```

---

## 🪟 Модальное окно

✅ Как это работает:
- Каждая кнопка имеет `data-modal-trigger="имя"`
- Каждое модальное окно — `data-modal="имя"`

```html
<!-- Кнопка открытия -->
<button data-modal-trigger="contact">Открыть форму</button>

<!-- Модальное окно -->
<div class="modal" data-modal="contact" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="modal__overlay" data-modal-close></div>
  <div class="modal__content" role="document">
    <button class="modal__close" data-modal-close>&times;</button>
    <h2>Связаться с нами</h2>
  </div>
</div>
```

---

## 📚 Аккордеон (FAQ)

```html
<div data-accordion>
  <div data-accordion-item>
    <button data-accordion-trigger>Вопрос 1</button>
    <div data-accordion-content class="accordion-content">
      Ответ 1
    </div>
  </div>

  <div data-accordion-item>
    <button data-accordion-trigger>Вопрос 2</button>
    <div data-accordion-content class="accordion-content">
      Ответ 2
    </div>
  </div>
</div>
```

---

## 🔽 Dropdown меню

```html
<div class="dropdown" data-dropdown>
  <button class="dropdown__trigger" data-dropdown-trigger>
    Меню
  </button>
  <div class="dropdown__menu" data-dropdown-menu>
    <a href="#">Пункт 1</a>
    <a href="#">Пункт 2</a>
  </div>
</div>
```

---

## 📑 Tabs (вкладки)

```html
<div data-tabs>
  <div class="tabs-nav">
    <button data-tab-button="tab1" class="is-active">Tab 1</button>
    <button data-tab-button="tab2">Tab 2</button>
    <button data-tab-button="tab3">Tab 3</button>
  </div>

  <div class="tabs-content">
    <div data-tab-content="tab1" class="is-active">Content for Tab 1</div>
    <div data-tab-content="tab2">Content for Tab 2</div>
    <div data-tab-content="tab3">Content for Tab 3</div>
  </div>
</div>
```

---

## 📎 Советы

- Используй **data-атрибуты** для масштабируемости.
- Подключи JS-инициализации через `assets/js/index.js`
- Добавь базовые утилиты `.no-scroll`, `.is-active`, `.is-visible` в SCSS.

---

## 👨‍💻 Автор

Serhii Aliiev · [GitHub](https://github.com) · [2025]