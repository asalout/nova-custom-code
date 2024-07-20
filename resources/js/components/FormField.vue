<template>
    <component
        :is="`form-code-field`"
        :field="field"
    />
</template>

<script>
export default {
    props: ['field'],
}
</script>
