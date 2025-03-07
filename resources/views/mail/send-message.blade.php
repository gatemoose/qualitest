<x-mail::message>

# Mensagem recebida!

Um cliente **enviou uma mensagem** através da **página de contato** do site da **Qualitest Engenharia**.

# Informações do remetente

**Quem enviou**: {{ $msg['name'] }}

**Email para contato**: {{ $msg['email'] ?? 'Não informado' }}

**Telefone para contato**: {{ $msg['tel'] ?? 'Não informado' }}

**Mensagem**: {{ $msg['message'] }}

</x-mail::message>
