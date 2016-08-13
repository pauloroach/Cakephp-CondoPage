

<!-- end of block .search__header-->
<form class="search__form" action="/resultados" id="search-form">
  <div class="search__row">
    <div class="search__form-group form-group">
      <label for="in-contract-type" class="search__form-label control-label">Adultos</label>
      <select id="adultos" name="adultos" data-placeholder="Selecciona" class="search__form-control search__form-control--select form-control js-in-select">
        <option label=" " value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </div>
    <div class="search__form-group form-group">
      <label for="in-contract-type" class="search__form-label control-label">Niños</label>
      <select id="ninos" name="ninos" data-placeholder="Selecciona" class="search__form-control search__form-control--select form-control js-in-select">
        <option label=" " value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </div>
    <div class="search__form-group form-group">
      <label class="search__form-label control-label" for="in-datetime">Fecha de Llegada  -  Fecha de Salida</label>
      <input type="text" class="search__form-control search__form-control--text js-datetimerange form-control" data-single-picker="false" data-time-picker="true" data-end-date="<?php echo date('d/m/Y', time()+259200); ?>" data-start-date="<?php echo date('d/m/Y'); ?>" id="in-datetime">
    </div>
  </div>
  <div class="search__row search__row--buttons">
    <div class="search__buttons">
      <button class="search__btn search__btn--action" type="submit">Buscar</button>
    </div>
  </div>
</form>
<!-- end of block .search__form#search-form-->
