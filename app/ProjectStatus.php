<?php

namespace App;

enum ProjectStatus: string
{
   case Open = 'open';
   Case Pending = 'pending';
   case Closed = 'closed';

   public function label(): string
   {
       return match ($this) {
           self::Open => 'Proposta Aberta',
           self::Pending => 'Proposta Pendente',
           self::Closed => 'Proposta Fechada',
       };
   }
}
